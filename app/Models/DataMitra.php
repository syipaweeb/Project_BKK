<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMitra extends Model
{
    use HasFactory;
    protected  $fillable = [
        'banner', 'logo' , 'nama_perusahaan' , 'deskripsi_perusahaan' , 'nomor_telepon', 'email', 'lokasi'
    ];
}
