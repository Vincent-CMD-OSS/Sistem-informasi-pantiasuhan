<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendiri extends Model
{
    use HasFactory;

    protected $table = 'pendiri';
    
    protected $fillable = [
        'nama_pengurus',
        'jabatan',
        'foto',
        'profil_panti_id'
    ];

    /**
     * Get the profile that this founder/manager belongs to
     */
    public function profilPanti()
    {
        return $this->belongsTo(ProfilPanti::class, 'profil_panti_id');
    }
}