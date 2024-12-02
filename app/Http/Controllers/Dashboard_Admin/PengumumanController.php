<?php

namespace App\Http\Controllers\Dashboard_Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; // Tambahkan impor untuk Validator facade

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumens = Pengumuman::all();
        return view('admin.Pengumuman.pengumuman', compact('pengumumens'));
    }

    public function create()
    {
        return view('admin.Pengumuman.tambahkan_Pengumuman');
    }

    public function store(Request $request)
    {
        // Custom validation rules with column name for unique email
        $rules = [
            'poto' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required'

        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $poto = $request->file('poto');
        $poto->storeAs('public/poto', $poto->hashName());

        $pengumumans = Pengumuman::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'poto' => $poto->hashName(),
        ]);

        return redirect()->route('pengumuman_admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Pengumuman $pengumuman_admin)
    {
        return view('admin.Pengumuman.edit_pengumuman', compact('pengumuman_admin'));
    }

    public function update(Request $request, Pengumuman $pengumuman_admin)
    {
        // Custom validation rules with column name for unique email
        $rules = [
            'poto' => 'image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required'
        ];

        // Validate the request
        $request->validate($rules);

        // Handle file upload
        if ($request->hasFile('poto')) {
            $poto = $request->file('poto');
            $potoName = $poto->hashName();
            $poto->storeAs('public/poto', $potoName);
        } else {
            $potoName = $pengumuman_admin->poto; // Keep the existing photo if no new one is uploaded
        }

        // Update the pengumuman record
        $pengumuman_admin->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'poto' => $potoName,
        ]);

        return redirect()->route('pengumuman_admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
    
        if ($pengumuman) {
            // Hapus gambar terkait pengumuman dari storage
            Storage::disk('local')->delete('public/poto/' . $pengumuman->poto);
    
            // Hapus pengumuman dari database
            $pengumuman->delete();
    
            return redirect()->route('pengumuman_admin.index')->with(['success' => 'Data berhasil dihapus']);
        } else {
            // Jika pengumuman tidak ditemukan
            return redirect()->route('pengumuman_admin.index')->with(['error' => 'Data tidak ditemukan']);
        }
    }
    
}
