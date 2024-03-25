<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class LokerController extends Controller
{
    public function index()
    {
        $lokers = Loker::all();
        return view('admin.loker.Bursa', compact('lokers'));
    }
    public function create()
    {
        return view('admin.loker.tambah_kerja');
    }
    public function store(Request $request)
    {
        // Custom validation rules with column name for unique email
        $rules = [
            'nama_perusahaan' => 'required',
            'nama_pekerjaan' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'banner' => 'required|image|mimes:png,jpg,jpeg',
            'logo' => 'required|image|mimes:png,jpg,jpeg',
            'rentang_gaji' => 'required',
            'jadwal_tes' => 'required',
            'batas_awal' => 'required',
            'batas_akhir' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $banner= $request->file('banner');
        $banner->storeAs('public/banner', $banner->hashName());

        $logo= $request->file('logo');
        $logo->storeAs('public/logo', $logo->hashName());

        $lokers = Loker::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'rentang_gaji' => $request->rentang_gaji,
            'jadwal_tes' => $request->jadwal_tes,
            'jadwal_tes' => $request->jadwal_tes,
            'batas_awal' => $request->batas_awal,
            'batas_akhir' => $request->batas_akhir,
            'banner' => $banner->hashName(),
            'logo' => $logo->hashName()
        ]);

        return redirect()->route('loker.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Loker $loker)
    {
        return view('admin.loker.edit_kerja', compact('loker'));
    }

    public function update( Request $request, Loker $loker)
    {
        // Custom validation rules with column name for unique email
        $rules = [
            'nama_perusahaan' => 'required',
            'nama_pekerjaan' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'banner' => 'required|image|mimes:png,jpg,jpeg',
            'logo' => 'required|image|mimes:png,jpg,jpeg',
            'rentang_gaji' => 'required',
            'jadwal_tes' => 'required',
            'batas_awal' => 'required',
            'batas_akhir' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        // dd($request->all());

        $banner= $request->file('banner');
        $banner->storeAs('public/banner', $banner->hashName());

        $logo= $request->file('logo');
        $logo->storeAs('public/logo', $logo->hashName());

        $Loker = $loker->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'rentang_gaji' => $request->rentang_gaji,
            'jadwal_tes' => $request->jadwal_tes,
            'jadwal_tes' => $request->jadwal_tes,
            'batas_awal' => $request->batas_awal,
            'batas_akhir' => $request->batas_akhir,
            'banner' => $banner->hashName(),
            'logo' => $logo->hashName()
        ]);

        return redirect()->route('loker.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id)
    {
        $loker =Loker::findOrFail($id);
        Storage::disk('local')->delete('public/banner/'. $loker->banner);
        Storage::disk('local')->delete('public/logo/'. $loker->logo);
        $loker->delete();

        if ($loker) {

            return redirect()->route('loker.index')->with(['success' => 'Data Behasil Dihapus']);
        }else{

            return redirect()->route('loker.index')->with(['error' => 'Data Gagal Dihapus']);
        }
    }

}
