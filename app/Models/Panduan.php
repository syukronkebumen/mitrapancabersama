<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    public $table = 'panduan';
    protected $fillable = [
        'nama',
        'file'
    ];
   
}
