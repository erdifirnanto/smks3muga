@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/gurukaryawan.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <!-- <h2>Top <em>marketing</em> agency &amp; consult your website <span>with us</span></h2> -->
          <h2>Visi Sekolah</h2>
        </div>
        <!-- <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>750+</h4>
                <h6>projects finished</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>340+</h4>
                <h6>happy clients</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>128+</h4>
                <h6>awards</h6>
              </div>
            </div>
          </div> -->
        <p>
          <!-- <a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent">SEO Dream</a> -->
        <div style="text-align:justify">
        Terwujudnya peserta didik yang islami, nasionalis, profesional dan berwawasan kewirausahaan.
    </div>
  </div>
</div>

<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <div style="text-align:left">
          <h2>Misi Sekolah</h2></div>
        </div>
      </div>
    </div>
  </div>
  <p>
    <div style="text-align:left">
     <div> 1. Melaksanakan pendidikan berdasarkan Iman, Islam dan Taqwa </div>
     <div> 2. Membentuk karakter pribadi siswa melalui ibadah </div>
     <div> 3. Melaksanakan pendidikan yang unggul dibidang IPTEK </div>
     <div> 4. Mencetak lulusan yang kompeten </div>
     <div> 5. Membekali lulusan berwawasan kewirausahaan </div>
      </div>
      </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection