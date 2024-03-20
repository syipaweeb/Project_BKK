<?php

namespace App\Http\Controllers;

use App\Models\DataMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class DataMitraController extends Controller
{
    public function index()
    {
        $data_mitras = DataMitra::all();
        return view('Admin.mitra', compact('data_mitras'));
    }

    public function create()
    {
        return view('Admin.tambah_mitra');
    }

    public function store(Request $request)
    {
        // Custom validation rules with column name for unique email
        $rules = [
            'banner' => 'required|image|mimes:png,jpg,jpeg',
            'logo' => 'required|image|mimes:png,jpg,jpeg',
            'nama_perusahaan' => 'required',
            'deskripsi_perusahaan' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|unique:data_mitras,email', // Specify table and column
            'lokasi' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $banner= $request->file('banner');
        $banner->storeAs('public/banner', $banner->hashName());
        $logo= $request->file('logo');
        $logo->storeAs('public/logo', $logo->hashName());

        $data_mitras = DataMitra::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
            'banner' => $banner->hashName(),
            'logo' => $logo->hashName()
        ]);

        return redirect()->route('data_mitra.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(DataMitra $data_mitra)
    {
        return view('Admin.edit_mitra', compact('data_mitra'));
    }

    public function update(Request $request, DataMitra $data_mitra)
    {
        // Custom validation rules with column name for unique email
        $rules = [
            'banner' => 'required|image|mimes:png,jpg,jpeg',
            'logo' => 'required|image|mimes:png,jpg,jpeg',
            'nama_perusahaan' => 'required',
            'deskripsi_perusahaan' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required', // Specify table and column
            'lokasi' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $banner= $request->file('banner');
        $banner->storeAs('public/banner', $banner->hashName());
        $logo= $request->file('logo');
        $logo->storeAs('public/logo', $logo->hashName());

        $data_mitras = $data_mitra->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'lokasi' => $request->lokasi,
            'banner' => $banner->hashName(),
            'logo' => $logo->hashName()
        ]);

        return redirect()->route('data_mitra.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id)
    {
        $data_mitra =DataMitra::findOrFail($id);
        Storage::disk('local')->delete('public/banner/'. $data_mitra->banner);
        Storage::disk('local')->delete('public/logo/'. $data_mitra->logo);
        $data_mitra->delete();

        if ($data_mitra) {

            return redirect()->route('data_mitra.index')->with(['success' => 'Data Behasil Dihapus']);
        }else{

            return redirect()->route('data_mitra.index')->with(['error' => 'Data Gagal Dihapus']);
        }
    }

}
