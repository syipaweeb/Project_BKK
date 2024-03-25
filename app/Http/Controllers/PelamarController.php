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


    public function store(Request $request)
    {

        // Custom validation rules with column name for unique email
        $rules = [
            'nama_pelamar' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'cv' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
            }
    }
}
