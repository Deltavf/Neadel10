<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }    

    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required|min:3|max:30|alpha_dash',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($credentials, $request->input('remember'))) {
            return redirect('/dashboard/novel');
        }

        return redirect('/login')->with('status', 'Username atau password anda salah');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
