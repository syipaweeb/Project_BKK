<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelamar', 'alamat', 'nomor_telepon', 'cv', 'user_id', 'loker_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loker()
    {
        return $this->belongsTo(Loker::class);
    }


}
