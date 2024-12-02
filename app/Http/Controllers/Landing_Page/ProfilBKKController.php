<?php

namespace App\Http\Controllers\Landing_Page;

use App\Http\Controllers\Controller;
use App\Models\ProfilBKK;
use Illuminate\Http\Request;

class ProfilBKKController extends Controller
{
    //
    public function index()
    {
        $profil_b_k_k_s = ProfilBKK::all();
        return view('LandingPage.profil_bkk', compact('profil_b_k_k_s'));
    }

    public function show($id)
    {
        $profil_b_k_k = ProfilBKK::find($id);
        return view('LandingPage.profil_bkk', compact('profil_b_k_k'));
    }
}
