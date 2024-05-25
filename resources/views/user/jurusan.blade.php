@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/praktikpplg.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <h3>Pengembangan Perangkat Lunak & Gim</h3>
        </div>

        <p>
        <div style="text-align:justify">
          Jurusan PPLG mempelajari tentang perkembangan perangkat lunak meliputi pembuatan, manajemen organisasi 
          pengembangan perangkat lunak, pemeliharaan dan manajemen kualitas. </div>
        </p>
      </div>
    </div>
  </div>
</div>

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/praktikmplb.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <h3>Manajemen Perkantoran dan Layanan Bisnis</h3>
        </div>

        <p>
        <div style="text-align:justify">
          Jurusan MPLB mempelajari segala jenis kegiatan kantor. Mulai dari pembukuan, pengarsipan, hingga public relations.</div></p>
      </div>
    </div>
  </div>
</div>

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/praktiktbsm.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <h3>Teknik Bisnis Sepeda Motor</h3>
        </div>

        <p>
        <div style="text-align:justify">
          Jurusan TBSM </div></p>
      </div>
    </div>
  </div>
</div>

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/praktiktkro.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <h3>Teknik Kendaraan Ringan Otomotif</h3>
        </div>

        <p>
        <div style="text-align:justify">
          Jurusan TKRO adalah salah satu bidang profesi yang mempelajari kompetisi keahlian bidang teknik otomotif yang menekankan pada bidang jasa perbaikan kendaraan ringan (Mobil). </div></p>
    </div>
  </div>
</div>

 <div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                <h6>Contact Us</h6>
                <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-6">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="contact-info">
                <ul>
                  <li>
                    <div class="icon">
                      <img src="{{asset('user/assets/images/contact-icon-01.png')}}" alt="email icon">
                    </div>
                    <a href="#">info@company.com</a>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="{{asset('user/assets/images/contact-icon-02.png')}}" alt="phone">
                    </div>
                    <a href="#">+62 812-3040-0703</a>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="{{asset('user/assets/images/contact-icon-03.png')}}" alt="location">
                    </div>
                    <a href="#">26th Street, Digital Villa</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection