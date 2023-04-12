<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use App\Models\Volume;
use App\Models\LikeNovel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index() {
        $novels = Novel::latest();
        if(request('search')) {
            $novels->where('title', 'like', request('search') . '%');
        }
        return view('novel.index', [
            'novels' => $novels->simplePaginate(18)
        ]);
    }

    public function detail(Novel $novel) {
        return view('novel.detail', [
            'novel' => $novel,
            'volumes' => Volume::latest('id')->where('novel_id', $novel->id)->select('title', 'slug', 'created_at')->get()
        ]);
    }

    public function volume(Novel $novel, Volume $volume) {
        return view('novel.volume', [
            'novel' => $novel,
            'volume' => $volume,
            'next' => Volume::where('novel_id', $novel->id)->where('id', '>', $volume->id)->select('slug')->orderBy('id')->first(),
            'previous' => Volume::where('novel_id', $novel->id)->where('id', '<', $volume->id)->select('slug')->orderBy('id', 'desc')->first()
        ]);
    }

    public function bookmark() {
        return view('novel.bookmark');
    }

    public function likeNovel(Request $request) {
        LikeNovel::create([
            'novel_id' => $request->id,
            'user_id' => auth()->user()->id,
        ]);
        
        return redirect()->back();
    }

    public function unlikeNovel(Request $request) {
        LikeNovel::where('novel_id', $request->id)->where('user_id', auth()->user()->id)->delete();
        return redirect()->back();
    }
}
