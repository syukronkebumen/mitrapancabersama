<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('profil.index', compact('profile'));
    }
}
