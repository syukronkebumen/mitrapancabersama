<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Candidate;
use App\Models\Keunggulan;
use App\Models\Layanan;
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
        $delay = 100;
        $keunggulan = Keunggulan::orderBy('created_at', 'DESC')->get();
        foreach ($keunggulan as $key => $value) {
            $dataKeunggulan[] = [
                'nama' => $value->nama,
                'deskripsi' => $value->deskripsi,
                'foto' => $value->foto,
                'delay' => $delay
            ];
            
            $delay += 100;
        }

        //layanan
        $icons = [
                'fa-mountain-city', 
                'fa-arrow-up-from-ground-water',
                'fa-compass-drafting',
                'fa-trowel-bricks',
                'fa-helmet-safety',
                'fa-arrow-up-from-ground-water'
            ];
        $layanans = Layanan::orderBy('created_at','DESC')->get();
        foreach ($layanans as $key => $item) {
            $dataLayanan[] = [
                'nama' => $item->nama,
                'deskripsi' => $item->deskripsi,
                'foto' => $item->foto,
                'delay' => $delay,
                'icon' =>$icons[$key]
            ];

            $delay += 100;
        }

        $artikel = Artikel::leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.kategori_id')
                            ->select(
                                'kategori_artikel.nama as nama_kategori',
                                'artikel.judul',
                                'artikel.slug',
                                'artikel.deskripsi',
                                'artikel.gambar',
                                'artikel.created_at'
                            )
                            ->orderBy('artikel.created_at','DESC')
                            ->take(3)
                            ->get();

        foreach ($artikel as $key => $item) {
            $dataArtikel[] = [
                'nama_kategori' => $item->nama_kategori,
                'judul' => $item->judul,
                'slug' => $item->slug,
                'deskripsi' => $item->deskripsi,
                'gambar' => $item->gambar,
                'created_at' => $item->created_at,
                'delay' => $delay
            ];

            $delay += 100;
        }
        
        return view('beranda',compact('dataArtikel','dataKeunggulan','dataLayanan'));
    }
}
