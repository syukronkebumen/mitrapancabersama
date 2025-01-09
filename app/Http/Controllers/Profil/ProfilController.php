<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $artikel = Artikel::leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.kategori_id')
                            ->select(
                                'kategori_artikel.nama as nama_kategori',
                                'artikel.judul',
                                'artikel.slug',
                                'artikel.deskripsi',
                                'artikel.gambar'
                            )
                            ->orderBy('artikel.created_at','DESC')
                            ->get();
        return view('profil.index', compact('artikel'));
    }
}
