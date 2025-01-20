@extends('layouts.sbadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Layanan</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="/admin/layanan/create" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ Str::limit($item->nama, 20) }}</td>
                                <td>
                                    @if ($item->foto)
                                    <img src="{{asset('storage/'.$item->foto)}}" width="100px" />
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info text-white btn-sm" href="/admin/layanan/{{ $item->id}}/edit">Edit</a>
                                    <form onsubmit="return confirm('Anda yakin akan menghapus data ini ?')" class="d-inline" action="{{ route('layanan.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $datas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection