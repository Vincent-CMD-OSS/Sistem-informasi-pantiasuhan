<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKhusus extends Model
{
    use HasFactory;

    protected $table = 'jadwal_khusus';

    protected $fillable = ['tanggal', 'jam_buka', 'jam_tutup', 'status', 'keterangan'];

    public $timestamps = false;
}
