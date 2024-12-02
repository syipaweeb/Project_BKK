<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilAlumni extends Model
{
    use HasFactory;

    protected $fillable = [' nama', 'nomor_telepon', 'email', 'jenis_kelamin', 'lokasi', 'profesi', 'foto_profil'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
