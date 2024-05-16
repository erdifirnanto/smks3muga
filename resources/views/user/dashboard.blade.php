@extends('user.master')
@section('master')

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-14">
          <div class="row">
            <div class="col-lg-10 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-7 col-sm-7">
                    <div class="info-stat">
                    <h3>Selamat Datang di Kampus</h3>
                    <h3>SMKS Muhammadiyah 3 Tegaldlimo</h3>
                    <!-- <h6>Agency Status:</h6> -->
                    </div>
                  </div>
                  <!-- <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Price:</h6>
                      <h4>$720/Month</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Schedules</h6>
                      <h4>$450/Meeting</h4>
                    </div>
                  </div> -->
                  <!-- <div class="col-lg-12">
                    <h2>SEO &amp; Digital Marketing Agency</h2>
                  </div> -->
                  <div class="col-lg-12 mt-4">
                    <div class="main-green-button scroll-to-section">
                      <a href="#contact">PPDB</a>
                    </div>
                  </div>
                  <div class="col-lg-7 col-sm-7 mt-4">
                    <div class="info-stat">
                    <h4>ISLAMI SANTUN & PROFESIONAL</h4>
                    <!-- <h3>SMKS Muhammadiyah 3 Tegaldlimo</h3> -->
                    <!-- <h6>Agency Status:</h6> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-5">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('user/assets/images/banner-right-image.png')}}" alt="">
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="features" class="features section">
      <div id="services" class="our-services section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 offset-lg-0">
              <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <h2>Alasan Memilih SMKS Muhammadiyah 3 Tegaldlimo</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="icon bi bi-building"></div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4q0 1 .25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75Q6 13 6 12H2s-2 0-2-2zm1.398-.855a.76.76 0 0 0-.254.302A1.5 1.5 0 0 0 1 4.01V10c0 .325.078.502.145.602q.105.156.302.254a1.5 1.5 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.76.76 0 0 0 .254-.302 1.5 1.5 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.76.76 0 0 0-.302-.254A1.5 1.5 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145"/>
                  </svg>
                  <h4>Fasilitas Lengkap</h4>
                  <div class=""></div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="icon"></div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"/>
                  </svg>
                  <h4>Lingkungan Nyaman</h4>
                  <div class=""></div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="icon"></div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
                  </svg>
                  <h4>Guru Kompeten</h4>
                  <div class=""></div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="icon"></div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                  </svg>
                  <h4>Kerja Sama Luas</h4>
                  <div class=""></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img style="width:350px;" src="{{asset('user/assets/images/kepsek.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <!-- <h6>About Us</h6> -->
            <h2>Prakata Kepala Sekolah</h2>
          </div>
          
          <p> 
            <div style="text-align:justify">
            Selamat datang di website SMK Muhammadiyah 3 Tegaldlimo yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang sekolah kami. Tentunya dalam penyajian informasi masih banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik demi kemajuan lebih lanjut.
            Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya, sehingga dapat menjalin silaturahmi yang erat di segala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus demi anak bangsa. 
            </div>
          </p>
          <h6><b>RAHMI NUR AINI, M.Pd. </h6>
        </div>
      </div>
    </div>
  </div>



  <div id="features" class="features section">
      <div id="services" class="our-services section">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 offset-lg-0">
                  <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>Jurusan SMKS Muhammadiyah 3 Tegaldlimo</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <!-- <div class="first-number number">
                    <h6>01</h6>
                  </div> -->
                  
                  <img style="max-width:100px;" src="{{asset('user/assets/images/pplg.png')}}" alt="">
                  <h4>Pengembangan Perangkat Lunak & Gim (PPLG)</h4>
                  <div class="line-dec"></div>
                  <p>Jurusan PPLG mempelajari tentang perkembangan perangkat lunak meliputi pembuatan, manajemen organisasi pengembangan perangkat lunak, pemeliharaan dan manajemen kualitas.s</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <!-- <div class="second-number number">
                    <h6>02</h6>
                  </div> -->
                  <div class="icon"></div>
                  <h4>Manajemen Perkantoran dan Layanan Bisnis (MPLB)</h4>
                  <div class="line-dec"></div>
                  <p>Jurusan MPLB mempelajari segala jenis kegiatan kantor. Mulai dari pembukuan, pengarsipan, hingga public relations.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <!-- <div class="third-number number">
                    <h6>03</h6>
                  </div> -->
                  <img style="max-width:135px;" src="{{asset('user/assets/images/tbsm.png')}}" alt="">
                  <h4>Teknik Bisnis Sepeda Motor (TBSM)</h4>
                  <div class="line-dec"></div>
                  <p>If this template is useful for your website, please consider to <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a little.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <!-- <div class="fourth-number number">
                    <h6>04</h6>
                  </div> -->
                  <div class="icon"></div>
                  <h4>Teknik Kendaraan Ringan (TKRO)</h4>
                  <div class="line-dec"></div>
                  <p>Jurusan TKRO adalah salah satu bidang profesi yang mempelajari kompetisi keahlian bidang teknik otomotif yang menekankan pada bidang jasa perbaikan kendaraan ringan (Mobil).</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
