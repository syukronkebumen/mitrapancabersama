@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets-fe/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Blog</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">
        @foreach ($artikel as $item)
        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('storage/'.$item->gambar) }}" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">{{ $item->judul }}</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">admin</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">{{ $item->nama_kategori }}</span>
                </div>
              </div>

              <p>
                {!! Str::limit($item->deskripsi, 164) !!}
              </p>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Lihat</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post list item -->
        @endforeach

      </div><!-- End blog posts list -->

      <div class="blog-pagination">
        <ul class="justify-content-center">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div><!-- End blog pagination -->

    </div>
  </section><!-- End Blog Section -->

@endsection