<?php

namespace App\Http\Controllers\Dashboard_Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilAdmin;
use Illuminate\Http\Request;

class ProfilAdminController extends Controller
{
    //
    public function index()
    {
        $profil_admins = ProfilAdmin::all();
        return view('admin.SetUp.profil', compact('profil_admins'));
    }

    public function edit(ProfilAdmin $profil_admin)
    {
        return view('admin.SetUp.profil', compact('profil_admin'));
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
            'lokasi' => $request->lokasi,
            'foto_profil' => $foto_profil->hashName()
        ]);

        return redirect()->route('profil_admin.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }
}

