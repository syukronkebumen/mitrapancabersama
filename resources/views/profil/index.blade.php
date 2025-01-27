@extends('layouts.app')

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets-fe/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Profil</h2>
        <ol>
            <li><a href="index.html">Home</a></li>
            <li>Profil</li>
        </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="row position-relative">

            <div class="col-lg-7 about-img" style="background-image: url({{asset('storage/'.$profile->foto)}});"></div>

            <div class="col-lg-7">
            <h2>{{ $profile->judul }}</h2>
            <div class="our-story">
                <p>{!! $profile->deskripsi !!}</p>

                <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
                </div>
            </div>
            </div>

        </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Happy Clients</p>
                </div>
            </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Projects</p>
                </div>
            </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-headset color-green flex-shrink-0"></i>
                <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Hours Of Support</p>
                </div>
            </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-people color-pink flex-shrink-0"></i>
                <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                    class="purecounter"></span>
                <p>Hard Workers</p>
                </div>
            </div>
            </div><!-- End Stats Item -->

        </div>

        </div>
    </section><!-- End Stats Counter Section -->
@endsection