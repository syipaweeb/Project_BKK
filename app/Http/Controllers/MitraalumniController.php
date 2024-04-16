<?php

namespace App\Http\Controllers;

use App\Models\DataMitra;
use Illuminate\Http\Request;

class MitraalumniController extends Controller
{
    public function index()
    {
        $data_mitras = DataMitra::all();
        return view('alumni.Mitra.mitra_alumni', compact('data_mitras'));
    }

    public function show($id)
    {
        $data_mitra = DataMitra::find($id);
        return view('alumni.Mitra.detail_mitra', compact('data_mitra'));
    }




}
