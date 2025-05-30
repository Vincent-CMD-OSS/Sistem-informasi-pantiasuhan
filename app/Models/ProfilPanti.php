<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilPanti extends Model
{
    protected $table = 'profil_panti';

    protected $fillable = [
        'nama', 'tentang', 'visi', 'misi', 'alamat', 'nomor_telepon', 'email'
    ];

    public function pendiri()
    {
        return $this->hasMany(Pendiri::class, 'profil_panti_id');
    }

}