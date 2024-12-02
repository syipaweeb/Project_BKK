<?php
namespace App\Http\Controllers\Dashboard_Alumni;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $pelamars =Pelamar::where('user_id', auth()->user()->id)->get();
        return view('alumni.Riwayat.Riwayat_lamaran', compact('pelamars'));
    }
}
