@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container mt-5 text-center">
    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <h2>Informasi Penerimaan Peserta Didik Baru
            Tahun Pelajaran 2024 - 2025</h2>
          <h4>Hadapi dengan optimis dan semangat mengasah diri dalam mengukir prestasi</h4>
        </div>
      </div>
      <div class="col-12 mt-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width: 80%; height: auto; margin-bottom:10px" src="{{asset('user/assets/images/grandopening.png')}}" alt="">
          <img style="width: 80%; height: auto;" src="{{asset('user/assets/images/posterppdb.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-12 mt-3">
        <div class="section-text" style="text-align: center;" wow fadeInRight data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="row">
            <div class="col-md-6">
              <div style="text-align: justify; display: inline-block; text-align: left;">
                <p><strong>Anda Akan Mendapatkan:</strong></p>
                <ol>
                  <li>1. Mendapat 3 Setel Seragam Sekolah</li>
                  <li>2. Free Biaya Pendaftaran</li>
                  <li>3. Free DPP 3 Tahun</li>
                </ol>
              </div>
            </div>
            <div class="col-md-6">
              <div style="text-align: justify; display: inline-block; text-align: left;">
                <p><strong>Syarat Mudah:</strong></p>
                <ol>
                  <li>1. Mengisi Formulir Pendaftaran</li>
                  <li>2. Ijazah SD/SMP Asli</li>
                  <li>3. Fotokopi Kartu Keluarga</li>
                  <li>4. Fotokopi Akte Kelahiran</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mt-3">
        <div class="section-video-description bg-primary rounded p-3">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="embed-responsive embed-responsive-16by9" style="max-width: 600px;">
                <iframe style="width: 500px;height: 325px;" class="embed-responsive-item" src="https://www.youtube.com/embed/OZLjGupkxYA" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-6 m-0">
              <div style="text-align: center;" class="section-heading">
                <h2 style="text-align:left;" class="text-dark">Vidio PPDB SMK Muhammadiyah 3 Tegaldlimo</h2>
                <p style="text-align:left;"> <strong> Selamat Menyongsong Tahun Ajaran Baru 2024/2025 <strong></p>
                <p style="text-align:left;" class="text-dark">Hadapi dengan optimis dan semangat mengasah diri dalam mengukir prestasi!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mt-3">
        <a href="https://wa.me/081230400703" target="_blank" class="btn btn-success">
          <i class="fa fa-whatsapp"></i> Hubungi Kami di WhatsApp
        </a>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScZo4GcffXLhxRgBKYXenJKfBCWyQHidvLr2rFi6Cbu_LmLdg/viewform" target="_blank" class="btn btn-primary">
          Daftar Sekarang
        </a>
      </div>


      <!-- Icon -->
      <div style="margin-top: 20px;">
        <a style="margin-right: 10px;" href="https://www.facebook.com/SMKMuhammadiyah3Tegaldlimo" target="_blank" class="social-icon">
          <i class="fa fa-facebook"></i>
        </a>
        <a style="margin-right: 10px;" href="https://www.twitter.com" target="_blank" class="social-icon">
          <i class="fa fa-instagram"></i>
        </a>
        <a style="margin-right: 10px;" href="https://www.youtube.com/@mugavision" target="_blank" class="social-icon">
          <i class="fa fa-youtube"></i>
        </a>
        <!-- <a style="margin-right: 10px;" href="https://www.tiktok.com/@smk_muhammadiyah_3" target="_blank" class="social-icon">
          <i class="fa fa-tiktok"></i>
        </a> -->
        <a style="margin-right: 10px;" href="https://www.tiktok.com/@smk_muhammadiyah_3" target="_blank" class="social-icon">
          <svg viewBox="0 0 48 48" width="20px" height="20px" fill="white">
            <path d="M41,15.79A12.08,12.08,0,0,1,28.89,3.68V2H21.9V32.16A3.55,3.55,0,1,1,16.7,28.61V20.61A9.39,9.39,0,1,0,25.24,30v-7.4A5.68,5.68,0,0,0,30.93,28.34a5.5,5.5,0,0,0,1.5-.21V18.21h0Z"></path>
          </svg>
        </a>
      </div>
      <!-- Icon End -->

      <style>
        .social-icon {
          display: inline-block;
          width: 60px;
          height: 60px;
          background-color: blue;
          color: white;
          text-align: center;
          line-height: 60px;
          border-radius: 50%;
          transition: background-color 0.3s;
        }

        .social-icon:hover {
          background-color: darkblue;
        }

        .social-icon i {
          font-size: 20px;
        }
      </style>



    </div>
  </div>
</div>

@endsection