<?php

namespace App\Http\Controllers\Landing_Page;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request; 

class PengumumanAlumniController extends Controller
{
    //
    public function index()
    {
        $pengumumans = Pengumuman::all();       
        return view('LandingPage.Pengumuman.pengumuman', compact('pengumumans'));   
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('LandingPage.Pengumuman.detail_pengumuman', compact('pengumuman'));
    }
}
