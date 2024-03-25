<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayats = Riwayat::all();
        return view('alumni.Riwayat.Riwayat_lamaran', compact('pelamars'));
    }
}
