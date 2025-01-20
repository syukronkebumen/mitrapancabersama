<?php

namespace App\Http\Controllers\Admin\Keunggulan;

use App\Http\Controllers\Controller;
use App\Models\Keunggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KeunggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Keunggulan::latest()->paginate(10);
        return view('admin.keunggulan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.keunggulan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            "nama" => "required",
            "deskripsi" => "min:20",
            "foto" => "image|mimes:jpg, png, jpeg | max:2000"
        ])->validate();

        $data = new Keunggulan();
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        
        if ($request->file('foto')) {
            $photo_path = $request->file('foto')->store('keunggulan','public');
            $data->foto = $photo_path;
        }

        $data->save();
        return redirect()->route('keunggulan.index')->with('status','berhasil menambahkan data!');
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
        $data = Keunggulan::find($id);
        return view('admin.keunggulan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Keunggulan::find($id);
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;

        if ($request->file('foto')) {
            $photo_path = $request->file('foto')->store('keunggulan','public');
            $data->foto = $photo_path;
        }
        // dd($artikel);
        $data->update();
        return redirect()->route('keunggulan.index')->with('status','berhasil memperbarui data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Keunggulan::destroy($id);
        return redirect()->route('keunggulan.index')->with('status','data berhasil dihapus!');
    }
}
