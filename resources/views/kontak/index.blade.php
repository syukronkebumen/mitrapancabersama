@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets-fe/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Kontak</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Kontak</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Alamat</h3>
            <p>Lampung, Indonesia</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p>info@mitrapancabersama.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Hubungi</h3>
            <p>+62 813-8292-9707</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">

        <div class="col-lg-6 ">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127101.57230485204!2d105.18833476867452!3d-5.42849561559404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da46f3aa6fbf%3A0x3039d80b220cc40!2sBandar%20Lampung%2C%20Bandar%20Lampung%20City%2C%20Lampung!5e0!3m2!1sen!2sid!4v1738206064067!5m2!1sen!2sid"
            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row gy-4">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

@endsection