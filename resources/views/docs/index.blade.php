@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">RFC2350</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li class="current">RFC2350</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>RFC2350</h2>
        <p>Dibawah ini merupakan dokumen dari RFC2350</p>
        <p>Untuk melihat dokumen PGP key bisa di lihat <a href="{{ asset('pdf/pubkey.asc') }}" target="_blank">disini</a></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-1">
            <object data="{{ asset('pdf/rfc2350-id.pdf') }}" type="application/pdf" width="100%" height="600px">
                <p>PDF tidak dapat ditampilkan di perangkat Anda. <a href="{{ asset('pdf/rfc2350-id.pdf') }}" target="_blank">Unduh PDF</a>.</p>
            </object>
        </div>

    </div>

</section>

@endsection