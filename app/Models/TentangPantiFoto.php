<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangPantiFoto extends Model
{
    use HasFactory;

    protected $fillable = ['tentang_panti_id', 'foto_path'];

    public function tentangPanti()
    {
        return $this->belongsTo(TentangPanti::class);
    }
}