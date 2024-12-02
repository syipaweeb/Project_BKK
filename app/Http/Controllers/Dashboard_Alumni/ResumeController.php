<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Resume::find(1); // Assuming you're fetching the resume with ID 1
        return view('alumni.Resume.resume', compact('resume'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048', // Hanya menerima file PDF, maksimal 2MB
        ]);

        // Simpan file resume
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('resume', $filename);

        // Buat entri baru di basis data
        $resume = Resume::create([
            'filename' => $filename,
            'path' => $path,
        ]);

        return redirect()->route('resume.index')->with('success', 'Resume berhasil diunggah.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input hanya untuk update
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048', // Hanya menerima file PDF, maksimal 2MB
        ]);

        // Mengecek apakah file yang diunggah adalah PDF
        if ($request->file('file')->getClientOriginalExtension() != 'pdf') {
            return redirect()->back()->with('error', 'Hanya file PDF yang diizinkan untuk diunggah.');
        }

        // Temukan resume berdasarkan ID
        $resume = Resume::findOrFail($id);

        // Hapus file yang lama
        Storage::delete($resume->path);

        // Simpan file resume yang baru
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('resume', $filename);

        // Update entri di basis data
        $resume->update([
            'filename' => $filename,
            'path' => $path,
        ]);

        return redirect()->route('resume.index')->with('success', 'Resume berhasil diperbarui.');
    }
}
