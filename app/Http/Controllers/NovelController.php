<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use App\Models\Volume;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index() {
        return view('novel.index', [
            'datas' => Novel::latest()->get()
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
}
