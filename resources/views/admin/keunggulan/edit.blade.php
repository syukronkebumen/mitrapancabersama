@extends('layouts.sbadmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form enctype="multipart/form-data" action="{{ route('keunggulan.update', $data->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{ $data->nama }}" class="form-control {{ $errors->first('nama') ? "is-invalid" : ""}}" placeholder="Masukkan Nama">
                                <p class="text-danger">{{ $errors->first('nama') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" placeholder="Enter the Description" name="deskripsi">{{ $data->deskripsi }}</textarea>
                                <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="foto" id="foto" class="form-control {{ $errors->first('foto') ? "is-invalid" : ""}}">
                                <img src="{{asset('storage/'.$data->foto)}}" width="100%" height="auto"  alt="{{ $data->judul }}">
                                <p class="text-danger">{{ $errors->first('foto') }}</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Simpan</button>
                                <a href="/admin/keunggulan" class="btn btn-danger btn-sm">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection