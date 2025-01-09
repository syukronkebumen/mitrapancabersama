<?php

namespace App\Http\Controllers\Docs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index()
    {
        // $candidates = Candidate::with('users')->paginate(5);
        // $jumlah = User::where('status','SUDAH')->count();
        // $candidates = Candidate::get();
        return view('docs.index');
    }
}
