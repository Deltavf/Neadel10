<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use App\Models\Volume;
use App\Rules\UniqueTitle;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardVolumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Novel $novel)
    {
        $volume = Volume::latest('id')->where('novel_id', $novel->id)->select('id', 'title', 'slug')->where('archive', 1);
        if(request('search')) {
            $volume->where('title', 'like', '%' . request('search') . '%');
        }

        return view('dashboard-volume.index', [
            'volumes' => $volume->simplePaginate(15),
            'novel' => $novel
        ]); 
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Novel $novel)
    {
        return view('dashboard-volume.create', [
            'novel' => $novel
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Novel $novel, Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', new UniqueTitle(['volume', $novel->id])],
            'story' => 'required'
        ]);
        

        $validatedData['slug'] = SlugService::createSlug(Volume::class, 'slug', $validatedData['title'], ['unique' => false]);
        $validatedData['novel_id'] = $novel->id;

        Volume::create($validatedData);
        
        return redirect("/dashboard/novel/$novel->slug/volume")->with('status', 'Volume novel telah di tambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Volume $volume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novel $novel, Volume $volume)
    {
        return view('dashboard-volume.edit', [
            'novel' => $novel,
            'volume' => $volume
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Novel $novel, Volume $volume, Request $request)
    {
        $rules = ['story' => 'required'];
        if($request->title != $volume->title) {
            $rules['title'] = ['required', new UniqueTitle(['volume', $novel->id])];
        } else {
            $rules['title'] = 'required';
        }

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = SlugService::createSlug(Volume::class, 'slug', $validatedData['title'], ['unique' => false]);

        Volume::where('id', $volume->id)->update($validatedData);

        return redirect("/dashboard/novel/$novel->slug/volume")->with('status', 'Volume novel telah di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Volume::destroy($request->id);
        return redirect()->back()->with('status', 'Volume novel telah di hapus.');
    }
}
