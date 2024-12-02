<?php

namespace App\Http\Controllers\Dashboard_Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GantiPasswordController extends Controller
{
    //
    public function index()
    {
        return view('alumni.Ganti_Password.ganti_password');
    }

    // Fungsi untuk mengganti password pengguna
    public function ganti_password(Request $request)
    {
        // Validasi input
        $request->validate([
            'password_lama' => 'required|min:6',
            'password_baru' => 'required|min:8|different:password_lama|different:password_baru_confirmation|unique:users,password|min:6',
            'password_baru_confirmation' => 'required|same:password_baru|min:6',
        ]);

        // Ambil pengguna yang sedang terautentikasi
        $user = Auth::user();

        // Periksa apakah password lama cocok
        if (!Hash::check($request->password_lama, $user->password)) {
            return back()->with('error', 'Password lama tidak cocok');
        }

        // Update password pengguna
        $user->password = Hash::make($request->password_baru);
        $user->save();

        return back()->with('success', 'Password berhasil diubah');
    }
}
