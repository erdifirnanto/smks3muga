@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="right-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/kepsek.jpg')}}" alt="">
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
          <h3>Daftar Guru</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{asset('user/assets/images/ahmadmarzuki.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Ahmad Marzuki</h4>
                <p>Guru Produktif Otomotif</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="assets/images/mariati.png" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Mariyati</h4>
                <p>Guru Produktif APK</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="assets/images/navashoqibatul.png" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Nava Shoqibatul</h4>
                <p>Guru Produktif RPL</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="assets/images/hadi.png" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Muhamad Hadi</h4>
                <p>Guru Produktif Otomotif</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="assets/images/khoirulanam.png" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Khoirul Anam</h4>
                <p>Guru Produktif OTKP</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{asset('user/assets/images/service-icon-02.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Luqman Fauzi</h4>
                <p>Guru Produktif RPL</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="assets/images/khoirulanam.png" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Dewi Hajar K.</h4>
                <p>Bahasa Indonesia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon">
              <img src="assets/images/mariati.png" alt="">
            </div>
          </div>
          <div class="col-lg-8">
            <div class="right-content">
              <h4>Mariyati</h4>
              <p>Guru Produktif APK</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon">
              <img src="assets/images/navashoqibatul.png" alt="">
            </div>
          </div>
          <div class="col-lg-8">
            <div class="right-content">
              <h4>Nava Shoqibatul</h4>
              <p>Guru Produktif RPL</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon">
              <img src="{{asset('user/assets/images/service-icon-02.png')}}" alt="">
            </div>
          </div>
          <div class="col-lg-8">
            <div class="right-content">
              <h4>Liya Elisya</h4>
              <p>Al-Islam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div id="galery" class="our-portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
          <h6>Our Portofolio</h6>
          <h2>Discover Our Recent <em>Projects</em> And <span>Showcases</span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
    <div class="row">
      <div class="col-lg-12">
        <div class="loop owl-carousel">
          <div class="item">
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/kepsek.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 101</h4>
                    </a>
                    <span>Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/gedung.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 102</h4>
                    </a>
                    <span>Branding</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/portfolio-02.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 103</h4>
                    </a>
                    <span>Consulting</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/portfolio-05.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 104</h4>
                    </a>
                    <span>Artwork</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/portfolio-03.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 105</h4>
                    </a>
                    <span>Branding</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/gedung.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 106</h4>
                    </a>
                    <span>Artwork</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/portfolio-04.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 107</h4>
                    </a>
                    <span>Creative</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{asset('user/assets/images/portfolio-01.jpg')}}" alt="">
                <div class="hover-content">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Awesome Project 108</h4>
                    </a>
                    <span>Consulting</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                <h6>Hubungi Kami</h6>
                <h4>Jika anda memiliki pertanyaan terkait akademik dan non akademik</h4>
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