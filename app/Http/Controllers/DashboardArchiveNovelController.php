<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class DashboardArchiveNovelController extends Controller
{
    public function index() {
        if(auth()->user()->role == 'admin') {
            $novels = Novel::join('users', 'novels.user_id', '=', 'users.id')->select('novels.title', 'novels.slug', 'novels.cover', 'users.username')->where('archive', 0)->withCount('volumes')->orderBy('novels.id', 'desc');
        } else {
            $novels = Novel::latest('id')->select('title', 'slug', 'cover')->where('archive', 0)->withCount('volumes')->where('user_id', auth()->user()->id);
        }

        if(request('search')) {
            $novels->where('novels.title', 'like', request('search') . '%');
        }
        
        return view('dashboard-archive.novel', [
            'novels' => $novels->simplePaginate(15)
        ]);
    }

    public function archive(Novel $novel) {
        Novel::where('id', $novel->id)->update(['archive' => 0]);
        return redirect()->back()->with('status', 'Novel has been archived');
    }

    public function unarchive(Novel $novel, Request $request) {
        Novel::where('id', $novel->id)->update(['archive' => 1]);
        return redirect()->back()->with('status', 'Novel has been unarchived');
    }
}
