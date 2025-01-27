@extends('layouts.sbadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Profile</h3>
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
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ Str::limit($item->judul, 20) }}</td>
                                <td>
                                    @if ($item->foto)
                                    <img src="{{asset('storage/'.$item->foto)}}" width="100px" />
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info text-white btn-sm" href="/admin/profile/{{ $item->id}}/edit">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function copyToClipboard(link) {
        navigator.clipboard.writeText(link)
    }
</script>
