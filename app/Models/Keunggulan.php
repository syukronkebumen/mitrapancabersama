<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keunggulan extends Model
{
    protected $table = 'keunggulan';
    protected $fillable = [
        'nama',
        'deskripsi',
        'foto'
    ];

}
