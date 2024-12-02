<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilAdmin extends Model
{
    use HasFactory;
    protected $fillable = [ 'foto_profil',' nama', 'nomor_telepon', 'email', 'jenis_kelamin', 'lokasi'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
