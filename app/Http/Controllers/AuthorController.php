<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Follow;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors = User::latest('id')->select('username', 'image')->withCount('novels');
        if(request('search')) {
            $authors->where('username', 'like', request('search') . '%');
        }

        return view('author.index', [
            'authors' => $authors->simplePaginate(18)
        ]);
    }

    public function profile(User $user) {
        return view('author.profile', [
            'author' => $user,
            'follow' => Follow::where('followed_id', $user->id)->where('follower_id', auth()->user()->id)->get()
        ]);
    }

    public function follow(User $user) {
        Follow::create([
            'followed_id' => $user->id,
            'follower_id' => auth()->user()->id
        ]);

        return redirect()->back();
    }

    public function unfollow(Request $request) {
        Follow::destroy($request->id);
        return redirect()->back();
    }
}
