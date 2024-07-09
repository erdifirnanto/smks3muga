@extends('user.master')
@section('master')

<div id="galery" class="our-portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
          <h6>Galeri Kami</h6>
          <h2>Temukan <em>Moment</em> Terkini <span>Kita</span></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
    <div class="row">
      <div class="col-lg-12">
        @foreach ($data as $item => $row)

        <div class="loop owl-carousel">
          <div class="item">
            <div class="portfolio-item">
              <div class="thumb">
                <img src="{{ asset('storage/'.$row->foto_prestasi) }}" alt="">
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
            
          </div>
@endforeach

      </div>
    </div>
  </div>
</div>
@endsection