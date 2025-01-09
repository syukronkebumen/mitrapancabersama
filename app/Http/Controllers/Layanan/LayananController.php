<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        // $candidates = Candidate::with('users')->paginate(5);
        // $jumlah = User::where('status','SUDAH')->count();
        // $candidates = Candidate::get();
        return view('layanan.index');
    }
}
