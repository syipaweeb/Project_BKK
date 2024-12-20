<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilBKK extends Model
{
    use HasFactory;
    protected  $fillable = [
        'banner',
        'tentang_bkk', 
        'visi',
        'misi', 
        'tujuan'
    ];
}
