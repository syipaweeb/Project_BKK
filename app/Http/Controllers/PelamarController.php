<?php

namespace App\Http\Controllers;
use App\Models\pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        $pelamars = Pelamar::all();
        return view('admin.Loker.Pelamar', compact('pelamars'));
    }


    public function create()
    {
        return view('alumni.Loker.detail_loker');
    }

    public function store(Request $request)
    {
        // Custom validation rules with column name for unique email
        $rules = [

            'nama_pelamar' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'cv' => 'required|image|mimes:png,jpg,jpeg',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $cv= $request->file('cv');
        $cv->storeAs('public/cv', $cv->hashName());

        $data_mitras = DataMitra::create([
            'nama_pelamar' => $request->nama_pelamar,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        return redirect()->route('pelamar.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
