<?php

namespace App\Http\Controllers\Landing_Page;

use App\Http\Controllers\Controller;
use App\Models\DataMitra;
use App\Models\Loker;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $totalMitra = DataMitra::count();
        $totalLowongan = Loker::count();

        $lokers = Loker::all();

        $data_mitras = DataMitra::all();
        return view('LandingPage.beranda', compact('lokers','data_mitras', 'totalMitra', 'totalLowongan'));
    }
}
