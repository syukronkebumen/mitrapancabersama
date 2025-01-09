<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $table = 'artikel';
    protected $fillable = [
        'kategori_id',
        'slug',
        'judul',
        'deskripsi',
        'gambar'
    ];
   
}
