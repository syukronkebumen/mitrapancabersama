<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="Mitra Panca Bersama - Jasa konsultasi konstruksi profesional yang menyediakan solusi terbaik untuk perencanaan, pengawasan, dan manajemen proyek konstruksi. Kami memastikan kualitas, efisiensi, dan kepuasan klien dalam setiap pekerjaan.">
    <meta name="keywords" content="Mitrapancabersama, jasa konsultasi konstruksi, perencanaan konstruksi, pengawasan proyek konstruksi, manajemen proyek konstruksi, konsultan konstruksi terpercaya, solusi konstruksi profesional, jasa konsultan pembangunan, konsultasi proyek infrastruktur, jasa konsultan perencanaan bangunan">
    <meta name="author" content="mitrapancabersama">

    <!-- Open Graph Meta Tags untuk Social Media -->
    <meta property="og:title" content="@yield('og_title', `{{ env('APP_NAME') }}`)">
    <meta property="og:description" content="@yield('og_description', 'Mitra Panca Bersama - Jasa konsultasi konstruksi profesional yang menyediakan solusi terbaik untuk perencanaan, pengawasan, dan manajemen proyek konstruksi. Kami memastikan kualitas, efisiensi, dan kepuasan klien dalam setiap pekerjaan.') ">
    <meta property="og:image" content="@yield('og_image', url('logo_mitrapancabersama.png'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <style type="text/css">
        .custom {
            font-size: 12px;
            font-family: Arial;
        }

        .bottomcustom,
        .topcustom {
            font-size: 12px;
            font-family: Arial;
            width: 100%;
        }
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}


    {{-- ##### --}}
    <!-- Favicons -->
    <link href="{{ asset('logo_mitrapancabersama.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets-fe/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-fe/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-fe/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-fe/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-fe/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-fe/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Main CSS File -->
    <link href="{{ asset('assets-fe/css/main.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5321156983100513"
     crossorigin="anonymous"></script>
</head>

<body>

    {{-- #### --}}
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Mitrapanca<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
            <li><a href="/" class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">Home</a></li>
            <li><a href="/profiles" class="{{ (\Request::route()->getName() == 'profiles') ? 'active' : '' }}">About</a></li>
            {{-- <li><a href="services.html">Services</a></li> --}}
            {{-- <li><a href="projects.html">Projects</a></li> --}}
            <li><a href="/articles">Blog</a></li>
            {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
                </ul>
            </li> --}}
            <li><a href="/contact">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main>
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="footer-info">
                <h3>Mitrapanca</h3>
                <p>
                    Lampung, IDN<br><br>
                    <strong>Phone:</strong> +62 81223456<br>
                    <strong>Email:</strong> info@mitrapancabersama.com<br>
                </p>
                <div class="social-links d-flex mt-3">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
            </div><!-- End footer info column-->

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
                </ul>
            </div><!-- End footer links column-->

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Graphic Design</a></li>
                </ul>
            </div><!-- End footer links column-->

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Hic solutasetp</h4>
                <ul>
                <li><a href="#">Molestiae accusamus iure</a></li>
                <li><a href="#">Excepturi dignissimos</a></li>
                <li><a href="#">Suscipit distinctio</a></li>
                <li><a href="#">Dilecta</a></li>
                <li><a href="#">Sit quas consectetur</a></li>
                </ul>
            </div><!-- End footer links column-->

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nobis illum</h4>
                <ul>
                <li><a href="#">Ipsam</a></li>
                <li><a href="#">Laudantium dolorum</a></li>
                <li><a href="#">Dinera</a></li>
                <li><a href="#">Trodelas</a></li>
                <li><a href="#">Flexo</a></li>
                </ul>
            </div><!-- End footer links column-->

            </div>
        </div>
        </div>

        <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
            &copy; Copyright <strong><span>mitrapancabersama</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
            Designed by <a href="#!">dev.mitrapanca</a>
            </div>
        </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="assets-fe/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-fe/vendor/aos/aos.js"></script>
    <script src="assets-fe/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets-fe/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets-fe/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets-fe/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets-fe/vendor/php-email-form/validate.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets-fe/js/main.js') }}"></script>
    @stack('script')
</body>

</html>