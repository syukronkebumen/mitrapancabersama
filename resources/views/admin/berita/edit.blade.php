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

                        <form enctype="multipart/form-data" action="{{ route('artikel.update', $datas->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select class="form-control" name="kategori_id" id="kategori_id">
                                    <option disabled value="" selected> Pilih Kategori </option>
                                    @foreach ($kategoris as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $datas->kategori_id ? 'selected' : '' }}>{{ $item->nama }} </option>
                                    @endforeach
                                </select>
                                <p class="text-danger">{{ $errors->first('kategori_id') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul" id="judul" value="{{ $datas->judul }}" class="form-control {{ $errors->first('judul') ? "is-invalid" : ""}}" placeholder="Masukkan Judul">
                                <p class="text-danger">{{ $errors->first('judul') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" placeholder="Enter the Description" name="deskripsi">{{ $datas->deskripsi }}</textarea>
                                <p class="text-danger">{{ $errors->first('deskripsi') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control {{ $errors->first('gambar') ? "is-invalid" : ""}}">
                                <img src="{{asset('storage/'.$datas->gambar)}}" width="100%" height="auto"  alt="{{ $datas->judul }}">
                                <p class="text-danger">{{ $errors->first('gambar') }}</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Simpan</button>
                                <a href="/admin/artikel" class="btn btn-danger btn-sm">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection