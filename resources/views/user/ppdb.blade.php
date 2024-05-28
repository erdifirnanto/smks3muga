@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container mt-5 text-center">
    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <h2>Informasi Penerimaan Peserta Didik Baru
            Tahun Pelajaran 2024 - 2025</h2>
        </div>
      </div>
      <div class="col-12 mt-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width: 100%; height: auto;" src="{{asset('user/assets/images/posterppdb.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-12 mt-3">
        <div class="section-text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <!-- <p>Ini adalah keterangan teks di bawah gambar poster. Anda bisa menambahkan lebih banyak teks di sini sesuai kebutuhan Anda.</p> -->
        </div>
      </div>
      <div class="col-12 mt-3">
        <a href="https://wa.me/081230400703" target="_blank" class="btn btn-success">
          <i class="fa fa-whatsapp"></i> Hubungi Kami di WhatsApp
        </a>
        <a href="" target="_blank" class="btn btn-primary">
          Daftar Sekarang
        </a>
        <a href="" target="_blank" class="btn btn-primary">
          Syarat Pendaftaran
        </a>
      </div>
    </div>
  </div>
</div>

@endsection