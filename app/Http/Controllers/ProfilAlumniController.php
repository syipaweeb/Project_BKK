<?php

namespace App\Http\Controllers;

use App\Models\ProfilAlumni;
use Illuminate\Http\Request;
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
        $this->authorize('update', $profil_alumni);
        return view('alumni.Profil_Alumni.profil_alumni', compact('profil_alumni'));
    }

    public function update(Request $request, ProfilAlumni $profil_alumni)
    {
        $this->authorize('update', $profil_alumni);
        // Logika untuk pembaruan data alumni
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'nullable',
            'jenis_kelamin' => 'nullable|in:male,female',
            'lokasi' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($request->user()->id !== $profil_alumni->id) {
            abort(403, 'Unauthorized action.');
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $profil_alumni = ProfilAlumni::findOrFail($profil_alumni); // Temukan profil alumni berdasarkan ID

        $profil_alumni->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'lokasi' => $request->lokasi
        ]);

        return redirect()->route('profil_alumni.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

}
