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
        <div style="text-align: center;" class="section-heading">
          <h2>Pengembangan Perangkat Lunak & Gim</h2>
        </div>
        <p>
        <div style="text-align:justify">
          Jurusan PPLG mempelajari tentang perkembangan perangkat lunak meliputi pembuatan, manajemen organisasi
          pengembangan perangkat lunak, pemeliharaan dan manajemen kualitas.
        </div>
      </div>
    </div>

    <div style="margin-top: 100px;" class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <div style="text-align: center;" class="section-heading">
            <h2>Manajemen Perkantoran dan Layanan Bisnis</h2>
          </div>
          <p>
          <div style="text-align:justify">
            Jurusan MPLB mempelajari segala jenis kegiatan kantor. Mulai dari pembukuan, pengarsipan, hingga public relations.
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <img style="width:550px;" src="{{asset('user/assets/images/praktikmplb.jpg')}}" alt="">
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<!-- Isi dibawah ini ya cil -->


<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:500px;" src="{{asset('user/assets/images/praktikpplg.jpg')}}" alt=""> <!-- Ini Foto -->
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div style="text-align: center;" class="section-heading">
          <h2>Judul</h2>
        </div>
        <p>
        <div style="text-align:justify">
          Deskripsi
        </div>
      </div>
    </div>

    <div style="margin-top: 100px;" class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <div style="text-align: center;" class="section-heading">
            <h2>Judul Isi dah</h2>
          </div>
          <p>
          <div style="text-align:justify">
            Deskripsi isi
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <img style="width:550px;" src="{{asset('user/assets/images/praktikmplb.jpg')}}" alt=""> <!--Fotonya Disini Cil-->
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection