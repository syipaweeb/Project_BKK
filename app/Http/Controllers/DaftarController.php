<?php

namespace App\Http\Controllers;

use App\Models\ProfilAlumni;
use App\Models\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //FUNGSI UNTUK MENAMPILKAN HALAMAN FORM DAFTAR USER
    public function index()
    {
        return view('Auth.daftar');
        return view('Auth.Admin.daftar');
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
        $user=User::create($validasiData);

        ProfilAlumni::insert([
            'user_id' => $user->id,
            'jenis_kelamin' => '',
            'lokasi' => '',
            'profesi' => '',
            'foto_profil' => '',
        ]);

        // JIKA BERHASIL LEMPAR KE HALAMAN LOGIN
        return redirect('/login')->with('berhasil', 'Akun Anda berhasil dibuat, silahkan login');
    }
}
