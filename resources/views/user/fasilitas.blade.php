@extends('user.master')

@section('master')

<!-- About Section -->
<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.0s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-9 offset-lg-2">
              <div class="section-heading">
                <h2>Fasilitas SMK Muhammadiyah 3 Tegaldlimo</h2>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Carousel Section -->
    <div style="text-align:justify; margin-top: 20px;">
      <h3></h3>
      <p>SMK Muhammadiyah 3 Tegaldlimo menawarkan berbagai fasilitas yang mendukung proses pembelajaran dan pengembangan keterampilan siswa. Sekolah ini dilengkapi dengan ruang kelas yang nyaman dan modern, laboratorium komputer dengan peralatan terbaru, serta bengkel praktik untuk jurusan teknik yang memadai. Selain itu, terdapat perpustakaan dengan koleksi buku yang lengkap, ruang multimedia, serta area olahraga yang luas untuk mendukung kegiatan ekstrakurikuler. Fasilitas penunjang lainnya termasuk mushola, kantin yang bersih, dan area parkir yang aman. Semua fasilitas ini dirancang untuk menciptakan lingkungan belajar yang kondusif dan mendukung pengembangan potensi siswa secara maksimal.</p>
    </div>

    <div id="carouselExampleAutoplay" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="1500">
      <div class="carousel-inner">
        @php
          $images = [
            'image1.jpg',
            'image2.jpg',
            'image3.jpg',
            'image4.jpg',
            'image5.jpg',
            'image6.jpg',
          ];
        @endphp

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="d-flex">
            @for ($i = 0; $i < 3; $i++)
              <div class="card mb-4" style="flex: 1; max-width: 400px; margin: 0 auto;">
                <img src="{{ asset('user/assets/images/ahmadmarzuki.png') }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="Image {{ $i + 1 }}">
              </div>
            @endfor
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="d-flex">
            @for ($i = 3; $i < 6; $i++)
              <div class="card mb-4" style="flex: 1; max-width: 400px; margin: 0 auto;">
                <img src="{{ asset('storage/images/' . $images[$i]) }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="Image {{ $i + 1 }}">
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
<div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:500px;" src="{{asset('user/assets/images/bankmuga.png')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div style="text-align: center;" class="section-heading">
          <h2>Bank Mini SMUGA</h2>
        </div>
        <p>
        <div style="text-align:justify">
          Bank Mini adalah simulasi operasional perbankan yang dibuat sedemikian rupa untuk menyerupai fungsi dan layanan sebuah bank nyata. Di Bank Mini SMK Muhammadiyah 3 Tegaldlimo, siswa dapat belajar berbagai aspek perbankan, mulai dari administrasi, layanan nasabah, hingga manajemen keuangan. Fasilitas ini dilengkapi dengan perangkat perbankan modern seperti komputer dengan software perbankan, mesin hitung uang, dan berbagai formulir transaksi yang sering digunakan di bank.
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
