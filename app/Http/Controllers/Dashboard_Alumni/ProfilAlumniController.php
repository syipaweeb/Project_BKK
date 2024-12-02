<?php

namespace App\Http\Controllers\Dashboard_Alumni;

use App\Http\Controllers\Controller;
use App\Models\ProfilAlumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; // Import Validator facade
use Symfony\Contracts\Service\Attribute\Required;

class ProfilAlumniController extends Controller
{
    public function index()
    {
        $profil_alumnis = ProfilAlumni::all();
        return view('alumni.Profil_Alumni.profil_alumni', compact('profil_alumnis'));
    }

    public function edit(ProfilAlumni $profil_alumni)
    {
        return view('alumni.Profil_Alumni.profil_alumni', compact('profil_alumni'));
    }

    public function update(Request $request)
    {
        // Logika untuk pembaruan data alumni
        // $rules = [
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'nomor_telepon' => 'nullable',
        //     'jenis_kelamin' => 'nullable|in:male,female',
        //     'lokasi' => 'required',
        // ];

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator->errors());
        // }

        $foto_profil= $request->file('foto_profil');
        $foto_profil->storeAs('public/foto_profil', $foto_profil->hashName());

        Auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        Auth()->user()->profil->update([
            'jenis_kelamin' => $request->jenis_kelamin,
            'lokasi' => $request->lokasi,
            'profesi' => $request->profesi,
            'foto_profil' => $foto_profil->hashName()
        ]);

        return redirect()->route('profil_alumni.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

}
