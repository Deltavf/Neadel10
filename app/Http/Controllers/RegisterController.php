<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function register(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:30|alpha_dash|unique:users',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $validatedData['role'] = 'uploader';
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
