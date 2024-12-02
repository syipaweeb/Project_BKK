<?php

namespace App\Http\Controllers\Dashboard_Alumni;

use App\Http\Controllers\Controller;
use App\Models\DataMitra;
use App\Models\Loker;
use App\Models\Mitra;
use App\Models\Lowongan;
use Illuminate\Http\Request;

class DashboardAlumniController extends Controller
{
    //
    public function index()
    {
        $totalMitra = DataMitra::count();
        $totalLowongan = Loker::count();

        return view('Alumni.Dashboard.dashboard', compact('totalMitra', 'totalLowongan'));
    }

}
