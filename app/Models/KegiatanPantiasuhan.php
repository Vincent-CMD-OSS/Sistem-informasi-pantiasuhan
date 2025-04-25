<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPantiasuhan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_pantiasuhan';
    protected $primaryKey = 'kegiatan_id';

    protected $fillable = [
        'nama_kegiatan',
        'deskripsi',
        'gambar_utama',
        'lokasi',
        'tanggal_kegiatan',
    ];
}