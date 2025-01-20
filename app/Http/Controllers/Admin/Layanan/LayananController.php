<?php

namespace App\Http\Controllers\Admin\Layanan;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Layanan::latest()->paginate(10);
        return view('admin.layanan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            "nama" => "required",
            "deskripsi" => "min:5",
            "foto" => "image|mimes:jpg, png, jpeg | max:2000"
        ])->validate();

        $data = new Layanan();
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;

        if ($request->file('foto')) {
            $photo_path = $request->file('foto')->store('layanan','public');
            $data->foto = $photo_path;
        }

        $data->save();
        return redirect()->route('layanan.index')->with('status','berhasil menambahkan data!');
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
        $data = Layanan::find($id);
        return view('admin.layanan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Layanan::find($id);
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;

        if ($request->file('foto')) {
            $photo_path = $request->file('foto')->store('layanan','public');
            $data->foto = $photo_path;
        }

        $data->update();
        return redirect()->route('layanan.index')->with('status','berhasil menambahkan data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Layanan::destroy($id);
        return redirect()->route('layanan.index')->with('status','data berhasil dihapus!');
    }
}
