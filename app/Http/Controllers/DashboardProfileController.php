<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File; 
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DashboardProfileController extends Controller
{
    public function index() {
        return view('dashboard-profile.index');
    }

    public function update(Request $request) {
        if(strtolower($request->username) != strtolower(auth()->user()->username)) {
            $rules['username'] = 'required|unique:users|alpha_dash|min:3';
        } else {
            $rules['username'] = 'required|min:3';
        }

        
        if(strtolower($request->email) != strtolower(auth()->user()->email)) {
            $rules['email'] = 'required|email:rfc,dns|unique:users';
        } else {
            $rules['email'] = 'required|email:rfc,dns';
        }

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $rules['image'] = 'required|image';
        } else if($request->hasFile('image') && !$request->file('image')->isValid()) {
            return redirect('/dashboard/profile')->with('status', 'Gambar yang anda masukkan tidak valid');
        }
        
        $validatedData = $request->validate($rules);

        $validatedData['email'] = strtolower($validatedData['email']);

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $fileName = $validatedData['username'] . uniqid() . '.webp';

            // Mengubah ekstensi gambar menjadi .webp dan mengkompres size gambar menjadi 500px
            $compressedImage = Image::make($request->file('image'))->fit(500, 500);

            // Mengambil path folder img di public
            $imgPath = public_path('/img');

            // Menyimpan gambar ke folder public/img/novel
            $compressedImage->save($imgPath . '/profile/' . $fileName);
            if(auth()->user()->image) {
                File::delete('img/profile/' . auth()->user()->image);
            }
            $validatedData['image'] = $fileName;
        }


        
        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect('/dashboard/profile')->with('status', 'Your profile has been updated');
    }
}
