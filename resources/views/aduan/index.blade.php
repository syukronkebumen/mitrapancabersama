@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Aduan Siber</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li class="current">Aduan Siber</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Aduan Siber</h2>
        <p>LamTim-CSIRT akan membantu terkait untuk melakukan penanggulangan dan pemulihan insiden keamanan siber</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 mt-1">
            <div class="col-lg-12 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                <p>Untuk pelaporan mengenai insiden siber yang terjadi, tim  LamTim-CSIRT telah membuat mekanisme pelaporan melalui
                    <br><br>
                    Email : <a href="#!">csirt@lampungprov.go.id</a>
                    <br><br>
                    Silahkan hubungi kami untuk melakukan aduan siber sesuai dengan prosedur pelaporan insiden.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection