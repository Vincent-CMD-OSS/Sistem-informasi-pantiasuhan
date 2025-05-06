<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangPanti extends Model
{
    use HasFactory;

    protected $fillable = ['tujuan', 'sejarah_singkat', 'makna_nama'];
}
