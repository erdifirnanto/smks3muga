@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:500px;" src="{{asset('user/assets/images/praktikpplg.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <h2>Pengembangan Perangkat Lunak & Gim</h2>
        </div>
        <p>
        <div style="text-align:justify">
          Jurusan PPLG mempelajari tentang perkembangan perangkat lunak meliputi pembuatan, manajemen organisasi 
          pengembangan perangkat lunak, pemeliharaan dan manajemen kualitas.
        </div>
      </div>
    </div>

    <div id="about" class="about-us section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img style="width:500px;" src="{{asset('user/assets/images/praktikmplb.jpg')}}" alt="">
            </div>
          </div>
      <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <h2>Manajemen Perkantoran dan Layanan Bisnis</h2>
        </div>
        <p>
        <div style="text-align:justify">
          Jurusan MPLB mempelajari segala jenis kegiatan kantor. Mulai dari pembukuan, pengarsipan, hingga public relations.
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection