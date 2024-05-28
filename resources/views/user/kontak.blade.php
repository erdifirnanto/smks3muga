@extends('user.master')
@section('master')

<div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                <h6>Hubungi Kami</h6>
                <h2>Isi Formulir Dibawah Ini Untuk <span>Menghubungi</span></h2>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-6">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Nama Depan" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="surname" name="surname" id="surname" placeholder="Nama Belakang" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Kamu" required="">
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <input type="subject" name="subject" id="subject" placeholder="Subjek" autocomplete="on">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Pesan" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="main-button ">Kirim Pesan Sekarang</button>
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
                    <a href="#">smkmuhammadiyah3tegaldlimo@gmail.com</a>
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