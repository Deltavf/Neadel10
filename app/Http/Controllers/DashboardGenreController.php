<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::latest()->select('name', 'slug', 'created_at');

        if(request('search')) {
            $genres->where('name', 'like', '%' . request('search') . '%');
        }
        return view('dashboard-genre.index', [
            'genres' => $genres->simplePaginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:genres'
        ]);
        
        $validatedData['slug'] = SlugService::createSlug(Genre::class, 'slug', $validatedData['name']);

        Genre::create($validatedData);
        return redirect('/dashboard/genre')->with('status', 'Genre telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('dashboard-genre.edit', [
            'genre' => $genre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        if($request->name != $genre->name) {
            $validatedData = $request->validate([
                'name' => 'required|unique:genres'
            ]);

            $validatedData['slug'] = SlugService::createSlug(Genre::class, 'slug', $validatedData['name']);

            Genre::where('id', $genre->id)->update($validatedData);
        }

        return redirect('/dashboard/genre')->with('status', 'Genre telah di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        Genre::destroy($genre->id);
        return redirect('/dashboard/genre')->with('status', 'Genre telah di hapus.');
    }
}
