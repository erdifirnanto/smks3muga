@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="right-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/rahmi.png')}}" alt="">
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
            <h4>Ahmad Marzuki, S.T.</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/mareti.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Mareti Kensiwi, S.Pd.</h4>
            <p> Guru Bahasa Indonesia/Seni</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/syamsul.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Syamsul Huda, S.THI</h4>
            <p>Guru BK</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/hadi.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Muhamad Hadi Makrus, S.T.</h4>
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
            <h4>Mariyati, S.E.</h4>
            <p>Guru Produktif APK</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/jeny.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Jeny Pratama</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/rohman.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Rohman Subekti</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/dewi.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Dewi Hajar K. K., S.Pd.</h4>
            <p>Guru Bahasa Indonesia/Seni</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/kholil.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>M. Muhtar Kholil, S.E.</h4>
            <p>Guru Produktif APK/IPAS</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/luqman.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Luqman Fauzi, S.Kom.</h4>
            <p>Produktif RPL/Informatika</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/habib.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>M. Habib Munir, S.Pd.</h4>
            <p>Matematika/Sejarah Indonesia</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/sugeng.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Sugeng Widodo, S.Pd.</h4>
            <p> Guru BK</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/nurul.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Nurul Azizah, S.Pd.</h4>
            <p>Guru IPAS</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/febri.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Febriyan Eka P., S.Si.</h4>
            <p>Guru IPAS</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/liya.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Liya Elisya, M.Pd.</h4>
            <p>Guru ISMUBA</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/sri.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Sri Kasanah, S.Ag.</h4>
            <p>Guru Mulok B. Jawa/ ISMUBA</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/ditia.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Ditia Puspita D., S.Pd.</h4>
            <p>Guru Matematika</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/unsa.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Unsa Aulia Rosanti, S.Pd.</h4>
            <p>Guru ISMUBA</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/rendi.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Rendi Zulfikar</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/fera.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Fera Rizkyana, S.Pd.</h4>
            <p>Guru Bahasa Inggris</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/navashoqibatul.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Nava Shoqibatul K., S.Tr.Kom.</h4>
            <p>Guru Produktif RPL</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/khoirulanam.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Khoirul Anam, M.M.</h4>
            <p>Guru Produktif OTKP/ B. Inggris</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Candra Yustia D., S.Pd.</h4>
            <p>Guru PPKN</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Rendi Kurniawan, S.Pd.</h4>
            <p>Guru BK</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Febi Islam R., S.T.</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Anang Hermawan, S.Kom.</h4>
            <p>Guru Informatika</p>
          </div>
        </div>
      </div>


      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Faizatul Cholidah., S.H.</h4>
            <p>Guru ISMUBA</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Amar Abdul Aziz</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Mahendra</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Muhammad Rizki A.</h4>
            <p>Guru Produktif Otomotif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Rino</h4>
            <p>Guru Produktif Otomtif</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon">
            <img src="{{asset('user/assets/images/no.png')}}" alt="Ahmad Marzuki">
          </div>
          <div style="padding-top:20px;" class="description">
            <h4>Nisa</h4>
            <p>Guru Bahasa Inggris</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>




@endsection