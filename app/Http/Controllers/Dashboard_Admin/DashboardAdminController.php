<?php

namespace App\Http\Controllers\Dashboard_Admin;

use App\Http\Controllers\Controller;
use App\Models\DataMitra;
use App\Models\Loker;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    //
    public function index()
    {
        $totalSiswa = User::count();
        $totalMitra = DataMitra::count();
        $totalLowongan = Loker::count();
        

        return view('admin.dashboard.dashboard', compact('totalSiswa','totalMitra', 'totalLowongan'));
    }
}
