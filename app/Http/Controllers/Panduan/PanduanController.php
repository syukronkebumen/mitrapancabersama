<?php

namespace App\Http\Controllers\Panduan;

use App\Http\Controllers\Controller;
use App\Models\Panduan;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        $panduan = Panduan::latest()->paginate(10);
        return view('panduan.index', compact('panduan'));
    }
}
