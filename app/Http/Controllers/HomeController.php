<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $candidates = Candidate::with('users')->paginate(5);
    //     $jumlah = User::where('status','SUDAH')->count();
    //     return view('pilihan.summary',compact('candidates','jumlah'));
    // }

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

        $artikelSide = Artikel::leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.kategori_id')
                            ->select(
                                'kategori_artikel.nama as nama_kategori',
                                'artikel.judul',
                                'artikel.slug',
                                'artikel.deskripsi',
                                'artikel.gambar',
                                'artikel.created_at'
                            )
                            ->inRandomOrder('artikel.created_at','DESC')
                            ->limit(5)
                            ->get();
        return view('beranda',compact('artikel','artikelSide'));
    }
}
