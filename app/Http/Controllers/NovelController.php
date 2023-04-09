<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use App\Models\Volume;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index() {
        $novels = Novel::latest();
        if(request('search')) {
            $novels->where('title', 'like', '%' . request('search') . '%');
        }
        return view('novel.index', [
            'novels' => $novels->simplePaginate(18)
        ]);
    }

    public function detail(Novel $novel) {
        return view('novel.detail', [
            'novel' => $novel
        ]);
    }

    public function volume(Novel $novel, Volume $volume) {
        return view('novel.volume', [
            'novel' => $novel,
            'volume' => $volume,
            'next' => Volume::where('novel_id', $novel->id)->where('id', '>', $volume->id)->orderBy('id')->first(),
            'previous' => Volume::where('novel_id', $novel->id)->where('id', '<', $volume->id)->orderBy('id', 'desc')->first()
        ]);
    }

    public function bookmark() {
        return view('novel.bookmark');
    }
}
