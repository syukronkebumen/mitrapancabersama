<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'profile';
    protected $fillable = [
        'judul',
        'deskripsi',
        'foto'
    ];
}
