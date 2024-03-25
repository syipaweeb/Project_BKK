<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected  $fillable = [
        'nama_perusahaan', 'nama_pekerjaan' , 'deskripsi', 'lokasi', 'banner', 'logo', 'rentang_gaji', 'jadwal_tes', 'batas_awal', 'batas_akhir'
    ];
}
