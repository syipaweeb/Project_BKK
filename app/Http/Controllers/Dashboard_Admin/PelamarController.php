<?php

namespace App\Http\Controllers\Dashboard_Admin;

use App\Http\Controllers\Controller;
use App\Models\DataMitra;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelamarController extends Controller
{

    public function index()
    {
        // Ambil semua data pelamar dari database
        $pelamars = Pelamar::all();

        // Kemudian kembalikan view dengan data pelamar
        return view('admin.Loker.Pelamar', compact('pelamars'));
    }
    

    public function create($loker_id)
    {
        return view('admin.Loker.Pelamar', ['loker_id' => $loker_id]);
    }



    public function store(Request $request)
    {
        // Validasi data pelamar
        $validator = Validator::make($request->all(), [
            'nama_pelamar' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'cv' => 'required',
        ]);

        // Jika validasi gagal, kembalikan dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $cek = Pelamar::where('user_id', auth()->user()->id)->where('loker_id', $request->loker_id)->count();

        if ($cek > 0) {
            return redirect()->back()->with('gagal', 'Anda telah melamar!!!');
        }

        $cv = $request->file('cv');
        $cv->storeAs('public/cv', $cv->hashName());

        // Simpan data pelamar ke database
        $pelamar = new Pelamar();
        $pelamar->nama_pelamar = $request->input('nama_pelamar');
        $pelamar->alamat = $request->input('nama_pelamar');
        $pelamar->nomor_telepon = $request->input('nomor_telepon');
        $pelamar->cv = $cv->hashName();
        $pelamar->user_id = auth()->user()->id;
        $pelamar->loker_id = $request->input('loker_id');

        // Tambahkan proses penyimpanan untuk field lain jika diperlukan
        $pelamar->save();

        // Redirect ke halaman lain atau memberikan respons yang sesuai
        return redirect()->route('riwayat.index');

        // Kemudian, Anda bisa redirect atau memberikan respons yang sesuai
    }

    public function show($id)
    {
        $pelamars = Pelamar::where('loker_id', $id)->get();
        return view('admin.Loker.Pelamar', compact('pelamars'));
    }

    
}
