@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="right-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/kepsek.png')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <!-- <h2>Top <em>marketing</em> agency &amp; consult your website <span>with us</span></h2> -->
          <h2>Sambutan Kepala Sekolah</h2>
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
          Selamat datang di website SMK Muhammadiyah 3 Tegaldlimo yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang sekolah kami. Tentunya dalam penyajian informasi masih banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik demi kemajuan lebih lanjut.
          Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya, sehingga dapat menjalin silaturahmi yang erat di segala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus demi anak bangsa.
        </div>
        </p>
        <h6><b>RAHMI NUR AINI, M.Pd. </h6>
        <!-- <div class="main-green-button mt-4"><a href="#">Discover company</a></div> -->
      </div>
    </div>
  </div>
</div>

<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2>Daftar Guru</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/ahmadmarzuki.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Ahmad Marzuki</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/mariyati.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Mariyati</h4>
            <p>Guru Produktif APK</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/navashoqibatul.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Nava Shoqibatul</h4>
            <p>Guru Produktif RPL</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/hadi.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Muhamad Hadi</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/khoirulanam.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Khoirul Anam</h4>
            <p>Guru Produktif OTKP</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/ahmadmarzuki.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Luqman Fauzi</h4>
            <p>Guru Produktif RPL</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/ahmadmarzuki.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Dewi Hajar K.</h4>
            <p>Bahasa Indonesia</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/ahmadmarzuki.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Liya Elisya</h4>
            <p>Al-Islam</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/ahmadmarzuki.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Nava Shoqibatul</h4>
            <p>Guru Produktif RPL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection