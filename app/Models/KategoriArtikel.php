<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    public $table = 'kategori_artikel';
    protected $fillable = [
        'name'
    ];
   
}
