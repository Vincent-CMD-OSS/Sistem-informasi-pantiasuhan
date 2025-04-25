<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi';
    protected $primaryKey = 'donasi_id';

    protected $fillable = [
        'nama_penerima',
        'no_rek',
    ];
}