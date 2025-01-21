@extends('layouts.app')

@section('content')

<!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
        <div class="container">
        <div class="row justify-content-between gy-4">

            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
                <h3>Detail Kontak Kami.</h3>
                <p>Kami selalu siap membantu Anda menemukan solusi terbaik untuk kebutuhan konstruksi Anda. Jangan ragu untuk menghubungi kami kapan saja melalui saluran komunikasi yang tersedia.
                </p>
            </div>
            </div>

            <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
                <h3>Kirim Pesan Anda</h3>
                <p></p>
                <div class="row gy-3">

                <div class="col-md-12">
                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>

                <div class="col-md-12 ">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                    <input type="text" class="form-control" name="phone" placeholder="Whatsapp" required>
                </div>

                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                    <button type="submit">Kirim Pesan</button>
                </div>

                </div>
            </form>
            </div><!-- End Quote Form -->

        </div>
        </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Mengapa Memilih Kami</h2>
            <p>Keunggulan Kami untuk Mendukung Kesuksesan Proyek Anda</p>
        </div>

        <div class="row gy-4">
            @foreach ($dataKeunggulan as $item)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $item['delay'] }}">
            <div class="card-item">
                <div class="row">
                <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url(storage/{{ $item['foto'] }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                    <h4 class="card-title">{{ $item['nama'] }}</h4>
                    <p>{!! $item['deskripsi'] !!}</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>

        </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Layanan</h2>
            <p>Solusi Lengkap untuk Kebutuhan Konstruksi Anda</p>
        </div>

        <div class="row gy-4">
            @foreach ($dataLayanan as $item)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $item['delay'] }}">
            <div class="service-item  position-relative">
                <div class="icon">
                <i class="fa-solid {{ $item['icon'] }}"></i>
                </div>
                <h3>{{ $item['nama'] }}</h3>
                <p>{!! $item['deskripsi'] !!}</p>
                <a href="#!" class="readmore stretched-link">Lihat Detail <i
                    class="bi bi-arrow-right"></i></a>
            </div>
            </div>
            @endforeach

        </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url(assets-fe/img/alt-services.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div>

            <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Pertanyaan yang Sering Diajukan</h3>
            <p>Kami memahami bahwa Anda mungkin memiliki banyak pertanyaan sebelum memulai proyek dengan kami.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                <h4><a href="" class="stretched-link">Apa saja layanan yang ditawarkan oleh Mitra Panca Bersama?</a></h4>
                <p>Kami menawarkan berbagai layanan konsultasi konstruksi, termasuk perencanaan dan desain, manajemen proyek, studi kelayakan, pengawasan konstruksi, estimasi biaya, serta konsultasi legal dan perizinan. Anda dapat melihat detail lebih lengkap di halaman Layanan Kami</p>
                </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                <h4><a href="" class="stretched-link">Berapa lama biasanya proses perencanaan dan desain?</a></h4>
                <p>Durasi proses perencanaan dan desain bergantung pada skala dan kompleksitas proyek. Untuk proyek standar, biasanya membutuhkan waktu antara 2 hingga 6 minggu. Kami akan memberikan timeline spesifik setelah diskusi awal</p>
                </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                <h4><a href="" class="stretched-link">Bagaimana cara mendapatkan penawaran harga?</a></h4>
                <p>Anda dapat menghubungi kami melalui email, telepon, atau formulir kontak di website kami. Tim kami akan meninjau kebutuhan proyek Anda dan memberikan penawaran harga yang transparan dan kompetitif.

                </p>
                </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                <h4><a href="" class="stretched-link">Apakah proyek saya akan diawasi langsung oleh tim profesional?                </a></h4>
                <p>Ya, setiap proyek akan diawasi oleh tim profesional kami yang berpengalaman untuk memastikan hasil kerja sesuai dengan standar kualitas dan spesifikasi yang disepakati. Kami juga menyediakan laporan rutin untuk kemajuan proyek</p>
                </div>
            </div><!-- End Icon Box -->

            </div>
        </div>

        </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    {{-- <section id="features" class="features section-bg">
        <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

            <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Modisit</h4>
            </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Praesenti</h4>
            </a><!-- End tab nav item -->

            <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Explica</h4>
            </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>Nostrum</h4>
            </a>
            </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

            <div class="tab-pane active show" id="tab-1">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                    pariatur.</li>
                </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets-fe/img/features-1.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-2">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Neque exercitationem debitis</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a.
                    Ipsum neque dolor voluptate nisi sed.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                    pariatur.</li>
                </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('assets-fe/img/features-2.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-3">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatibus commodi accusamu</h3>
                <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a.
                    Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua.
                </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('assets-fe/img/features-3.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Omnis fugiat ea explicabo sunt</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                    pariatur.</li>
                </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('assets-fe/img/features-4.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            </div><!-- End tab content item -->

        </div>

        </div>
    </section> --}}
    <!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Portfolio</h2>
            <p>Proyek yang Telah Kami Tangani</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Construction 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/construction-1.jpg" title="Construction 1"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/repairs-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Repairs 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/design-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Design 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/remodeling-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Remodeling 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Construction 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/construction-2.jpg" title="Construction 2"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/repairs-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Repairs 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/design-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Design 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/remodeling-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Remodeling 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/construction-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Construction 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/construction-3.jpg" title="Construction 3"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                        class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Repairs 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                <img src="{{ asset('assets-fe/img/projects/design-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Design 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i
                        class="bi bi-link-45deg"></i></a>
                </div>
                </div>
            </div><!-- End Projects Item -->

            </div><!-- End Projects Container -->

        </div>

        </div>
    </section><!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Testimoni</h2>
            <p>Apa Kata Klien Kami?</p>
        </div>

        <div class="slides-2 swiper">
            <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <img src="{{ asset('assets-fe/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                    <h3>Budi Santoso</h3>
                    <h4>PT Arsitek Karya Nusantara</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Mitra Panca Bersama benar-benar memahami kebutuhan kami. Dari perencanaan hingga pengawasan proyek, semuanya dilakukan dengan profesionalisme tinggi. Kami sangat puas dengan hasil akhirnya!
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <img src="{{ asset('assets-fe/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                    <h3>Sarah Widya</h3>
                    <h4>CV Mega Bangun Sejahtera</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Tim mereka sangat berpengalaman dan komunikatif. Semua tahap proyek kami dikelola dengan efisien, dan hasilnya melampaui ekspektasi. Sangat direkomendasikan!
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <img src="{{ asset('assets-fe/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                    <h3>Ahmad Faisal</h3>
                    <h4>Pembangunan Gedung Perkantoran</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Pendekatan inovatif mereka dalam menggunakan teknologi konstruksi sangat membantu mempercepat proses dan mengurangi biaya. Terima kasih atas kerja samanya!
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Lisa Pratiwi</h3>
                    <h4>Renovasi dan Desain Interior Rumah</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Layanan konsultasi dan desain mereka luar biasa. Detailnya sangat diperhatikan, dan hasilnya sempurna. Saya pasti akan menggunakan layanan mereka lagi di masa depan
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div>
            </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up"">
        <div class=" section-header">
        <h2>Artikel</h2>
        <p>Artikel yang sesuai untukmu</p>
        </div>

        <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets-fe/img/blog/blog-1.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

            </div>

            </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets-fe/img/blog/blog-2.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
            </div>

            <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

            </div>

            </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('assets-fe/img/blog/blog-3.jpg') }}" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
            </div>

            <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>

            </div>

            </div>
        </div><!-- End post item -->

        </div>

        </div>
    </section>
  <!-- End Recent Blog Posts Section -->

@endsection