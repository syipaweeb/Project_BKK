<?php

namespace App\Http\Controllers\Dashboard_Admin;

use App\Http\Controllers\Controller;
use App\Models\ManajemenSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemenSiswaController extends Controller
{
    //
    public function index()
    {
        $manajemen_siswas = ManajemenSiswa::all();
        return view('admin.Manajemen_Siswa.siswa', compact('manajemen_siswas'));
    }
}
