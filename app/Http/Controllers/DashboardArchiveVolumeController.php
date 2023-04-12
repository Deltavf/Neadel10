<?php

namespace App\Http\Controllers;

use App\Models\Volume;
use Illuminate\Http\Request;

class DashboardArchiveVolumeController extends Controller
{
    public function index()
    {
        $volume = Volume::join('novels', 'volumes.novel_id', '=', 'novels.id')->select('volumes.id', 'volumes.title', 'volumes.slug', 'novels.title as novel_title', 'novels.slug as novel_slug')->where('volumes.archive', 0);
        if(request('search')) {
            $volume->where('novels.title', 'like', '%' . request('search') . '%');
        }

        return view('dashboard-archive.volume', [
            'volumes' => $volume->simplePaginate(15),
        ]); 
    }

    public function archive(Request $request) {
        Volume::where('id', $request->id)->update(['archive' => 0]);
        return redirect()->back()->with('status', 'Volume has been archived');
    }

    public function unarchive(Request $request) {
        Volume::where('id', $request->id)->update(['archive' => 1]);
        return redirect()->back()->with('status', 'Volume has been unarchived');
    }
}
