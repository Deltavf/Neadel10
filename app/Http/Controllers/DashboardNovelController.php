<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File; 
use App\Models\Genre;
use App\Models\Novel;
use App\Models\GenreNovel;
use App\Rules\UniqueTitle;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardNovelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        if(auth()->user()->role == 'admin') {
            $novels = Novel::join('users', 'novels.user_id', '=', 'users.id')->select('novels.title', 'novels.slug', 'novels.cover', 'users.username')->where('archive', 1)->withCount('volumes')->orderBy('novels.id', 'desc');
        } else {
            $novels = Novel::latest('id')->select('title', 'slug', 'cover')->where('archive', 1)->withCount('volumes')->where('user_id', auth()->user()->id);
        }

        if(request('search')) {
            $novels->where('novels.title', 'like', request('search') . '%');
        }

        return view('dashboard-novel.index', [
            'novels' => $novels->simplePaginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-novel.create', [
            'genres' => Genre::select('id', 'name')->orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Memvalidasi data request
        $validatedData = $request->validate([
            'title' => ['required', new UniqueTitle(['novel', auth()->user()->id])],
            'status' => 'required',
            'genre' => 'required',
            'cover' => 'required|image',
            'synopsis' => 'required',
        ]);

        // Membuat slug menggunakan plugin sluggable
        $validatedData['slug'] = SlugService::createSlug(Novel::class, 'slug', $validatedData['title']);

        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {

            // Membuat nama file gambar
            $fileName = $validatedData['slug'] . uniqid() . '.webp';

            // Mengubah ekstensi gambar menjadi .webp dan mengkompres size gambar menjadi 500px
            $compressedImage = Image::make($request->file('cover'))->fit(450, 600);

            // Mengambil path folder img di public
            $imgPath = public_path('/img');

            // Menyimpan gambar ke folder public/img/novel
            $compressedImage->save($imgPath . '/novel/' . $fileName);
            $validatedData['cover'] = $fileName;
            $validatedData['user_id'] = auth()->user()->id;
            $novel = Novel::create($validatedData);
            foreach($request->genre as $genre) {
                GenreNovel::create([
                    'novel_id' => $novel->id,
                    'genre_id' => $genre,
                ]);
            }
        } else {
            return redirect('/dashboard/novel/create')->with('status', 'Gambar yang anda masukkan tidak valid');
        }
        return redirect('/dashboard/novel')->with('status', 'Novel telah di tambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Novel $novel)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novel $novel)
    {   
        return view('dashboard-novel/edit', [
            'novel' => $novel,
            'genres' => Genre::select('id', 'name')->orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Novel $novel)
    {
        // Mendapatkan semua id genre novel di database
        $databaseGenres = [];
        foreach($novel->genres as $key => $genre) {
            $databaseGenres[$key] = $genre->id;
        }
        $databaseGenres = collect($databaseGenres)->sort()->values()->all();

        $rules = [
            'status' => 'required',
            'genre' => 'required',
            'synopsis' => 'required',
        ];

        if(strtolower($request->title) != strtolower($novel->title)) {
            $rules['title'] = ['required', new UniqueTitle(['novel', $novel->user_id])];
        } else if($request->title != $novel->title) {
            $rules['title'] = 'required';
        }

        if($request->hasFile('cover')) {
            $rules['cover'] = 'required|image';    
        }
        
        $validatedData = $request->validate($rules);
        
        if(strtolower($request->title) != strtolower($novel->title)) {
            $validatedData['slug'] = SlugService::createSlug(Novel::class, 'slug', $validatedData['title']);
        } else {
            $validatedData['slug'] = $novel->slug;
        }

        if($request->hasFile('cover')) {
            if($request->file('cover')->isValid()) {
                File::delete('img/novel/' . $novel->cover);
                $fileName = $validatedData['slug'] . uniqid() . '.webp';
                $compressedImage = Image::make($request->file('cover'))->fit(450, 600);
                $imgPath = public_path('/img');
                $compressedImage->save($imgPath . '/novel/' . $fileName);
                $validatedData['cover'] = $fileName;
            } else {
                return redirect('/dashboard/novel/' . $novel->slug . '/edit')->with('status', 'Gambar yang anda masukkan tidak valid');
            }
        } 
        
        $newGenres = collect($validatedData['genre'])->sort()->values()->all();
        if($newGenres != $databaseGenres) {
            GenreNovel::where('novel_id', $novel->id)->delete();
            foreach($newGenres as $newGenre) {
                GenreNovel::create([
                    'novel_id' => $novel->id,
                    'genre_id' => $newGenre
                ]);
            }
        }

        unset($validatedData['genre']);

        Novel::where('id', $novel->id)->update($validatedData);

        return redirect('/dashboard/novel')->with('status', 'Novel telah di update');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Novel $novel)
    {
        Novel::destroy($novel->id);
        File::delete('img/novel/' . $novel->cover);
        return redirect()->back()->with('status', 'Novel telah di hapus');
    }
}
