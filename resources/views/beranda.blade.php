@extends('layouts.app')

@section('content')

<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                @foreach ($artikel as $item)
                                    <li class="news-item">{{$item->judul}}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    @foreach ($artikel as $index => $item)
                        @if ($index == 0)
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="{{ '/storage/'.$item->gambar }}" alt="{{ $item->judul }}">
                                <div class="trend-top-cap">
                                    <span>{{ $item->nama_kategori }}</span>
                                    <h2><a href="{{ '/detail/'.$item->slug }}">{{ $item->judul }}</a></h2>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($artikel as $index => $item)
                                @if ($index < 4 && $index != 0)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ '/storage/'.$item->gambar }}" alt="{{ $item->judul }}">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">{{ $item->nama_kategori }}</span>
                                                <h4><a href="{{ '/detail/'.$item->slug }}">{{ $item->judul }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    @foreach ($artikelSide as $item)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ '/storage/'.$item->gambar }}" width="120" height="100" alt="{{ $item->judul }}">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{ $item->nama_kategori }}</span>
                                <h4><a href="{{ '/detail/'.$item->slug }}">{{ $item->judul }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
<!--   Weekly-News start -->
<div class="weekly-news-area pt-50">
    <div class="container">
       <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Berita Teratas</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">
                        @foreach ($artikelSide as $item)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{ '/storage/'.$item->gambar }}" alt="{{ $item->judul }}" width="290" height="270">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">{{ $item->nama_kategori }}</span>
                                    <h4><a href="{{ '/detail/'.$item->slug }}">{{ $item->judul }}</a></h4>
                                </div>
                            </div> 
                        @endforeach
                        
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>           
<!-- End Weekly-News -->
@endsection