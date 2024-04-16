<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //FUNGSI UNTUK MENAMPILKAN HALAMAN FORM DAFTAR USER
    public function index()
    {
        return view('Auth.daftar');
    }

    // FUNGSI UNTUK MENYIMPAN USER BARU
    public function store(Request $request)
    {
        // ATURAN VALIDASI
        $aturan = [
            'name' => 'required|max:225',
            'nomor_telepon' => 'required|numeric',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
        ];

        // JALANKAN PROSES VALIDASI INTPUTAN
        $validasiData = $request->validate($aturan);

        $validasiData['password'] = bcrypt($request->password);
        $validasiData['level'] = 'alumni';

        // SIMPAN DATA KE TABLE USER
        User::create($validasiData);

        // JIKA BERHASIL LEMPAR KE HALAMAN LOGIN
        return redirect('/login')->with('berhasil', 'Akun Anda berhasil dibuat, silahkan login');
    }
}
