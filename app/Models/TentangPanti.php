<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangPanti extends Model
{
    use HasFactory;

    protected $fillable = ['tujuan', 'sejarah_singkat', 'makna_nama'];

    // public function galeriFoto()
    // {
    //     return $this->hasMany(TentangPantiFoto::class);
    // }

    // Di dalam model TentangPanti
    public function galeriFoto()
    {
        return $this->hasMany(TentangPantiFoto::class);
    }
}
