<?php

namespace App\Http\Controllers;
use App\Models\riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayats = Riwayat::all();
        return view('alumni.Riwayat.Riwayat_lamaran', compact('riwayats'));
    }
}
