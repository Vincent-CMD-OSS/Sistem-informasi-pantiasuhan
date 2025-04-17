<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    protected $table = 'kebutuhan';

    protected $fillable = [
        'judul',
        'deskripsi',
        'jumlah_kebutuhan',
        'satuan',
        'kategori',
        'status',
        'tanggal_dibuat',
        'batas_waktu',
        'gambar',
    ];
}
