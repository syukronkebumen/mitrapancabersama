@extends('layouts.app')

@section('content')

<div class="about-area">
    <div class="container">
            <!-- Hot Aimated News Tittle-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                @foreach ($artikel as $item)
                                    <li class="news-item">{{ $item->judul }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                    <img src="{{ asset('assets-aznews/img/post/profile.jpg') }}" alt="">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h3>About Us</h3>
                                </div>
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25">
                                        Narasipedia adalah platform pengetahuan yang dirancang untuk menjadi jembatan antara pembaca dan berbagai informasi yang dapat diakses dengan mudah dan cepat. Dengan visi untuk menjadi sumber informasi terpercaya, kami menyajikan konten-konten berkualitas dari berbagai bidang, termasuk teknologi, sains, sejarah, budaya, dan banyak lagi. Setiap artikel di Narasipedia dirancang dengan teliti dan disusun oleh tim yang berdedikasi, memastikan bahwa setiap pembaca mendapatkan informasi yang akurat dan bermanfaat. Kami memahami bahwa kebutuhan informasi semakin berkembang, dan Narasipedia hadir untuk membantu Anda mendapatkan wawasan baru di tengah kesibukan sehari-hari. Melalui navigasi yang intuitif dan desain yang ramah pengguna, kami ingin menjadikan proses belajar lebih mudah dan menyenangkan. Temukan informasi yang Anda cari dan perluas pengetahuan Anda tanpa batas, hanya di Narasipedia.</p>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-40">
                        <h3>Follow Us</h3>
                    </div>
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{ asset('assets-aznews/img/news/icon-fb.png') }}" alt=""></a>
                                </div>
                                <div class="follow-count">  
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div> 
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{ asset('assets-aznews/img/news/icon-tw.png') }}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                                <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{ asset('assets-aznews/img/news/icon-ins.png') }}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{ asset('assets-aznews/img/news/icon-yo.png') }}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="assets/img/news/news_card.jpg" alt="">
                    </div>
                </div>
           </div>
    </div>
</div>

@endsection