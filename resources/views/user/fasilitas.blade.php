@extends('user.master')
@section('master')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="about" class="about-us section mt-4">
        <div style="text-align: center;" class="section-heading">
          <h2>Fasilitas SMK Muhammadiyah 3 Tegaldlimo</h2>
        </div>
      </div>
      <div id="about" class="about-us section" style="margin-top:-170px;">
        <div style="text-align: justify;" class="section-heading">
          <p>SMK Muhammadiyah 3 Tegaldlimo menawarkan berbagai fasilitas yang mendukung proses pembelajaran dan pengembangan keterampilan siswa. Sekolah ini dilengkapi dengan ruang kelas yang nyaman dan modern, laboratorium komputer dengan peralatan terbaru, serta bengkel praktik untuk jurusan teknik yang memadai. Selain itu, terdapat perpustakaan dengan koleksi buku yang lengkap, ruang multimedia, serta area olahraga yang luas untuk mendukung kegiatan ekstrakurikuler. Fasilitas penunjang lainnya termasuk mushola, kantin yang bersih, dan area parkir yang aman. Semua fasilitas ini dirancang untuk menciptakan lingkungan belajar yang kondusif dan mendukung pengembangan potensi siswa secara maksimal.</p>
        </div>
      </div>

      <div id="about" class="about-us section" style="margin-top:-150px;">
        <div>
          {{-- INI DI ISI FOTO Ya Tapi 4 Aja Jangan lebihhhhhh --}}
          <div class="slider">
            <div class="slide-track">
              <div class="slide"><img src="{{asset('user/assets/images/foto4.jpg')}}" height="300" alt="1" /></div>
              <div class="slide"><img src="{{asset('user/assets/images/foto2.jpg')}}" height="300" alt="1" /></div>
              <div class="slide"><img src="{{asset('user/assets/images/foto3.jpg')}}" height="300" alt="1" /></div>
              <div class="slide"><img src="{{asset('user/assets/images/foto6.jpg')}}" height="300" alt="1" /></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- produk -->
  <section class="produk">
    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <a href="{{route('bankminimuga.user')}}">
            <div class="card" style="background-image: url('user/assets/images/bankmuga.png');">
              <div class="back d-flex justify-content-center">
                <h1>Bank Mini Muga</h1>
                <button type="button" class="btn btn-primary" style="border-radius: 20px;">Baca Selengkapnya</button>
              </div>
            </div>
          </a>
        </div>


        <div class="col-md-3">
          <a href="{{route('masjid.user')}}">
            <div class="card" style="background-image: url('user/assets/images/masjid.jpg');">
              <div class="back d-flex justify-content-center">
                <h1>Masjid Al-Hikmah</h1>
                <button type="button" class="btn btn-primary" style="border-radius: 20px;">Baca Selengkapnya</button>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="{{route('perpustakaan.user')}}">
            <div class="card" style="background-image: url('user/assets/images/perpustakaan.jpg');">
              <div class="back d-flex justify-content-center">
                <h1>Perpustakaan</h1>
                <button type="button" class="btn btn-primary" style="border-radius: 20px;">Baca Selengkapnya</button>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <div class="card" style="background-image: url('user/assets/images/tempatparkir.jpg');">
            <div class="back d-flex justify-content-center">
              <h1>Tempat Parkir</h1>
              <button type="button" class="btn btn-primary" style="border-radius: 20px;">Baca Selengkapnya</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</div>

<style>
  @keyframes scroll {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(calc(-270px * 14));
      /* Adjusted for gap */
    }
  }

  .slider {
    background: white;
    box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .125);
    height: 300px;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 100%;
    /* Adjusted for gap */

    &::before,
    &::after {
      content: "";
      /* height: 250px; */
      position: absolute;
      /* width: 220px; */
      /* Adjusted for gap */
      z-index: 2;
      background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    }

    &::after {
      right: 0;
      top: 0;
      transform: rotateZ(180deg);
    }

    &::before {
      left: 0;
      top: 0;
    }

    .slide-track {
      display: flex;
      gap: 5px;
      /* Add gap between slides */
    }

    .slide {
      height: 300px;
      width: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  }

  /* produk */
  .produk {
    margin-top: 100px;
  }

  .produk .co h1 {
    color: #000;
    font-size: 36px;
    font-weight: 600;
    text-align: center;
    font-family: Montserrat;
  }

  .produk .co button {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    font-family: Montserrat;
    width: 100%;
    border: none;
    background: linear-gradient(to right, #007793, #00d7f6);
    padding: 7px;
    border-radius: 10px;
  }

  .produk .co p {
    color: #000;
    font-size: 14px;
    font-weight: 400;
    text-align: justify;
    font-family: Montserrat;
  }

  .produk .co {
    background: #fff;
    border-radius: 20px;
    box-shadow: 1px 2px 6px 3px rgba(0, 0, 2, 0.15);
    padding: 20px;
    position: sticky;
    z-index: 2;
    top: 120px;
  }

  .produk .y {
    margin-top: 20px;
  }

  .produk .card h1 {
    /* border: solid; */
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    font-family: Montserrat;
    position: absolute;
    top: 40%;
    /* left: 25%; */
  }

  .produk .card p {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    font-family: Montserrat;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    overflow: auto;
    text-overflow: ellipsis;
    scrollbar-width: none;
    /* For Firefox */
  }

  .produk .card p::-webkit-scrollbar {
    display: none;
    /* For Chrome, Safari, and Opera */
  }

  .produk .card .back {
    background: linear-gradient(to top, #000000, #000000ad, #ffffff00);
    padding: 13px;
    padding-top: 200px;
    border-radius: 20px;
    position: relative;
    text-align: center;
  }

  .produk .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .produk .card {
    background-position: center;
    background-size: cover;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
  }
</style>

<script>
  window.addEventListener('load', function() {
    const slider = document.querySelector('.slider');
    const slideTrack = document.querySelector('.slide-track');
    const slides = Array.from(document.querySelectorAll('.slide'));
    const slideWidth = slides[0].offsetWidth;
    const slideGap = parseInt(window.getComputedStyle(slideTrack).gap);

    // Clone the slides to create an infinite loop effect
    slides.forEach(slide => {
      const clone = slide.cloneNode(true);
      slideTrack.appendChild(clone);
    });

    // Set the width of the slide track based on the number of slides
    const totalWidth = (slideWidth + slideGap) * slides.length * 3;
    slideTrack.style.width = `${totalWidth}px`;

    let currentPosition = 0;

    function animateSlider() {
      currentPosition -= 0.8; // Adjust speed if needed
      if (Math.abs(currentPosition) >= (slideWidth + slideGap) * slides.length) {
        currentPosition = 0;
      }
      slideTrack.style.transform = `translateX(${currentPosition}px)`;
      requestAnimationFrame(animateSlider);
    }

    animateSlider();
  });
</script>

@endsection