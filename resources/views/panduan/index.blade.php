@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Panduan</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li class="current">Panduan</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Panduan Penanganan Insiden Siber</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 mt-1">
            <div class="col-lg-12 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($panduan as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama }}</td>
                        <td><a href="{{ asset('pdf/'.$item->file) }}" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection