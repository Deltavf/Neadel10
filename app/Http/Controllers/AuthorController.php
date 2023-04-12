<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'author' => $user
        ]);
    }
}
