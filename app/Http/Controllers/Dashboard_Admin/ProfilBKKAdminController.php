<?php

namespace App\Http\Controllers\Dashboard_Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilBKK;
use Illuminate\Http\Request;

class ProfilBKKAdminController extends Controller
{
    //
    public function index()
    {
        $profil_b_k_k_s = ProfilBKK::all();
        return view('admin.SetUp.Profil.profil', compact('profil_b_k_k_s'));
    }

    public function edit(ProfilBKK $profil_bkk)
    {
        return view('admin.SetUp.Profil.edit_profil', compact('profil_bkk'));
    }

    public function update(Request $request, ProfilBKK $profil_bkk)
    {

        // Custom validation rules with column name for unique email
        $rules = [
            'banner' => 'required|image|mimes:png,jpg,jpeg',
            'tentang_bkk' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required'
        ];

        // Validate the request
        $request->validate($rules);

        // Handle file upload
        $banner = $request->file('banner');
        $banner->storeAs('public/bannerProfile', $banner->hashName());

        // Update the profil record
        $profil_bkk->update([
            'tentang_bkk' => $request->tentang_bkk,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'banner' => $banner->hashName()
        ]);

        return redirect()->route('profil_bkk.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
