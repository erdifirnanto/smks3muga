@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:300px;" src="{{asset('user/assets/images/ipm.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <h3>Ikatan Pelajar Muhammadiyah</h3>
        </div>

        <p>
        <div style="text-align:justify">
          Ikatan Pelajar Muhammadiyah merupakan </div>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection