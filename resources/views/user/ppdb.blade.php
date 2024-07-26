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
        <div class="section-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="row">
            <div class="col-md-6 text-right">
              <p><strong>Anda Akan Mendapatkan:</strong></p>
              <ol>
                <li>1. Mendapat 3 Setel Seragam Sekolah</li>
                <li>2. Free Biaya Pendaftaran</li>
                <li>3. Free DPP 3 Tahun</li>
              </ol>
            </div>
            <div class="col-md-6">
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

      <div class="col-12 mt-3">
        <div class="section-video-description bg-primary rounded p-3">
          <div class="row align-items-center">
            <div class="col-md-6 offset-md-1">
              <div class="embed-responsive embed-responsive-16by9" style="max-width: 200px;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OZLjGupkxYA" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-5">
              <h3 style="text-align:left;" class="text-white">Judul Video</h3>
              <p style="text-align:left;" class="text-white">Deskripsi singkat tentang video ini. Anda dapat menjelaskan konten utama dari video ini di sini.</p>
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

    <div style="margin-top:20px; ">
        <a style="margin-right:10px;" href="https://www.facebook.com/SMKMuhammadiyah3Tegaldlimo" target="_blank">
            <i class="fa fa-facebook"></i>
        </a>
        <a style="margin-right:10px;" href="https://www.twitter.com" target="_blank">
            <i class="fa fa-instagram"></i>
        </a>
        <a style="margin-right:10px;" href="https://www.youtube.com/@mugavision" target="_blank">
            <i class="fa fa-youtube"></i>
        </a>
        <a style="margin-right:10px;" href="https://www.tiktok.com/@smk_muhammadiyah_3" target="_blank">
    <i class="fab fa-tiktok"></i>
</a>
        </a>
    </div>
    </div>
  </div>
</div>

@endsection