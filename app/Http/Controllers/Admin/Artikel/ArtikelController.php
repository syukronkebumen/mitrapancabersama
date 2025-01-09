<?php

namespace App\Http\Controllers\Admin\Artikel;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {
        $datas = Artikel::latest()->paginate(15);
        return view('admin.berita.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = KategoriArtikel::get();
        return view('admin.berita.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            "kategori_id" => "required",
            // "slug" => "required|unique:artikel,slug",
            "judul" => "required",
            "deskripsi" => "required|min:50",
            "gambar" => "required|image|mimes:jpg, png, jpeg | max:2000"
        ])->validate();

        $artikel = new Artikel();
        $artikel->kategori_id = $request->kategori_id;
        $artikel->judul = $request->judul;
        $artikel->slug = Str::slug($request->judul);
        $artikel->deskripsi = $request->deskripsi;

        if ($request->file('gambar')) {
            $photo_path = $request->file('gambar')->store('artikel','public');
            $artikel->gambar = $photo_path;
        }
        // dd($artikel);
        $artikel->save();
        return redirect()->route('artikel.index')->with('status','berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoris = KategoriArtikel::get();
        $datas = Artikel::find($id);
        return view('admin.berita.edit', compact('kategoris','datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artikel = Artikel::find($id);
        $artikel->kategori_id = $request->kategori_id;
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;

        if ($request->file('gambar')) {
            $photo_path = $request->file('gambar')->store('artikel','public');
            $artikel->gambar = $photo_path;
        }
        // dd($artikel);
        $artikel->update();
        return redirect()->route('artikel.index')->with('status','berhasil menambahkan data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::destroy($id);        
        return redirect()->route('artikel.index')->with('status','data berhasil dihapus!');
    }
}
