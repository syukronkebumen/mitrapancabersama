<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="Narasipedia - Sumber informasi terlengkap yang menyajikan artikel, panduan, dan pengetahuan terkini di berbagai bidang. Jelajahi konten yang informatif dan bermanfaat untuk menambah wawasan Anda.">
    <meta name="keywords" content="Narasipedia, informasi, panduan, pengetahuan, artikel terbaru, sumber informasi, edukasi, ilmu pengetahuan, artikel informatif, wawasan, edukasi online, pengetahuan umum">
    <meta name="author" content="narasipedia">

    <!-- Open Graph Meta Tags untuk Social Media -->
    <meta property="og:title" content="@yield('og_title', 'Narasipedia.co.id')">
    <meta property="og:description" content="@yield('og_description', 'Narasipedia - Sumber informasi terlengkap yang menyajikan artikel, panduan, dan pengetahuan terkini di berbagai bidang. Jelajahi konten yang informatif dan bermanfaat untuk menambah wawasan Anda.') ">
    <meta property="og:image" content="@yield('og_image', url('assets-aznews/img/logo/logo_narasipedia_fav.png'))">
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
    <link href="{{ asset('assets-aznews/img/logo/logo_narasipedia_fav.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-aznews/css/style.css') }}">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5321156983100513"
     crossorigin="anonymous"></script>
</head>

<body>

    {{-- #### --}}
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="{{ asset('assets-aznews/img/icon/header_icon1.png') }}" alt="">34ºc, Sunny </li>
                                        <li><img src="{{ asset('assets-aznews/img/icon/header_icon1.png') }}" alt="">{{ \Carbon\Carbon::now()->translatedFormat('l, jS M, Y') }}</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('assets-aznews/img/logo/logo_narasipedia.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{ asset('assets-aznews/img/hero/ads_homepage.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="/"><img src="{{ asset('assets-aznews/img/logo/logo_narasipedia.png') }}" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/profil">Profil</a></li>
                                            {{-- <li><a href="latest_news.html">Latest News</a></li> --}}
                                            <li><a href="/kontak">Contact</a></li>
                                            <li><a href="/berita">Berita</a></li>
                                            {{-- <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="details.html">Categori Details</a></li>
                                                </ul>
                                            </li> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="/"><img src="{{ asset('assets-aznews/img/logo/logo_narasipedia_footer.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>
                                            Narasipedia adalah pusat pengetahuan yang menyediakan informasi lengkap dan terpercaya untuk mendukung kebutuhan belajar Anda. Kami hadir untuk mempermudah akses terhadap berbagai wawasan dari beragam bidang, memberi Anda referensi berkualitas yang selalu bisa diandalkan. Dapatkan konten yang tersusun dengan cermat untuk memperkaya pengetahuan Anda secara praktis dan fleksibel.
                                        </p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Narasipedia</h4>
                                <p>Referensi Terpercaya untuk Generasi Digital!</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                                class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img src="{{ asset('assets-aznews/img/logo/form-iocn.png') }}" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Narasipedia <i class="ti-heart" aria-hidden="true"></i> by <a href="#!">Narasipedia</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('assets-aznews/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets-aznews/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets-aznews/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets-aznews/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('assets-aznews/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets-aznews/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset('assets-aznews/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('assets-aznews/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets-aznews/js/contact.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets-aznews/js/plugins.js') }}"></script>
    <script src="{{ asset('assets-aznews/js/main.js') }}"></script>
    @stack('script')
</body>

</html>