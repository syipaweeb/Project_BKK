<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;

class LokeralumniController extends Controller
{
    public function index()
    {
        $lokers = Loker::all();
        return view('alumni.Loker.loker_alumni', compact('lokers'));
    }

    public function show($id)
    {
        $loker = Loker::find($id);
        return view('alumni.Loker.detail_loker', compact('loker'));
    }}
