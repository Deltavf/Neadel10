<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File; 
use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest('id')->select('username', 'created_at');

        if(request('search')) {
            $users->where('username', 'like', request('search') . '%');
        }

        return view('dashboard-user.index', [
            'users' => $users->simplePaginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        foreach($user->novels as $novel) {
            File::delete('img/novel/' . $novel->cover);
        }

        User::destroy($user->id);
        return redirect('/dashboard/user')->with('status', 'Akun user telah di hapus.');
    }
}
