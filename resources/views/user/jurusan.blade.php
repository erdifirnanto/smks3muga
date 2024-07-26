@extends('user.master')
@section('master')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="about" class="about-us section mt-4">
        <div style="text-align: center;" class="section-heading">
          <h2>Ekstrakurikuler SMK Muhammadiyah 3 Tegaldlimo</h2>
        </div>
      </div>
      <div id="about" class="about-us section" style="margin-top:-170px;">
        <div style="text-align: justify;" class="section-heading">
          <p>SMK Muhammadiyah 3 Tegaldlimo menawarkan dukungan lengkap
            bagi proses pembelajaran dan pengembangan keterampilan siswa
            di setiap jurusan yang ada. Setiap jurusan dilengkapi dengan
            ruang kelas yang nyaman dan modern, laboratorium khusus dengan
            peralatan terbaru, serta bengkel praktik yang memadai sesuai dengan
            bidang masing-masing. Hal ini bertujuan untuk menciptakan lingkungan
            belajar yang kondusif bagi siswa di setiap jurusan.</p>
        </div>
      </div>

      <div id="about" class="about-us section" style="margin-top:-150px;">
        <div>

          <div class="slider">
            <div class="slide-track">
              <div class="slide"><img src="{{asset('user/assets/images/praktikpplg.jpg')}}" height="250" alt="1" /></div>
              <div class="slide"><img src="{{asset('user/assets/images/praktikmplb.jpg')}}" height="250" alt="1" /></div>
              <div class="slide"><img src="{{asset('user/assets/images/praktiktbsm.jpg')}}" height="250" alt="1" /></div>
              <div class="slide"><img src="{{asset('user/assets/images/praktiktkro.jpg')}}" height="250" alt="1" /></div>
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
          <div class="card" style="background-image: url('user/assets/images/praktikpplg.jpg');">
            <div class="back">
              <h1>Web Developer</h1>
              <p>Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Rem
                possimus reiciendis ipsam ab
                distinctio quia tenetur quos sequi
                facere quisquam. Iusto perspiciatis
                tempore expedita numquam excepturi
                dolorum debitis. Expedita,
                deserunt!</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="background-image: url('user/assets/images/praktikpplg.jpg');">
            <div class="back">
              <h1>Web Developer</h1>
              <p>Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Rem
                possimus reiciendis ipsam ab
                distinctio quia tenetur quos sequi
                facere quisquam. Iusto perspiciatis
                tempore expedita numquam excepturi
                dolorum debitis. Expedita,
                deserunt!</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="background-image: url('user/assets/images/praktikpplg.jpg');">
            <div class="back">
              <h1>Web Developer</h1>
              <p>Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Rem
                possimus reiciendis ipsam ab
                distinctio quia tenetur quos sequi
                facere quisquam. Iusto perspiciatis
                tempore expedita numquam excepturi
                dolorum debitis. Expedita,
                deserunt!</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="background-image: url('user/assets/images/praktikpplg.jpg');">
            <div class="back">
              <h1>Web Developer</h1>
              <p>Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Rem
                possimus reiciendis ipsam ab
                distinctio quia tenetur quos sequi
                facere quisquam. Iusto perspiciatis
                tempore expedita numquam excepturi
                dolorum debitis. Expedita,
                deserunt!</p>
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
    height: 250px;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 980px;
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
      gap: 10px;
      /* Add gap between slides */
    }

    .slide {
      height: 250px;
      width: 250px;
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
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    font-family: Montserrat;
  }

  .produk .card p {
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    font-family: Montserrat;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .produk .card .back {
    background: linear-gradient(to top, #000000, #000000ad, #ffffff00);
    padding: 13px;
    padding-top: 200px;
    border-radius: 20px;
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
      currentPosition -= 0.5; // Adjust speed if needed
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