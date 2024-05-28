@extends('user.master')
@section('master')

<div id=" about" class="about-us section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 mt-5">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img style="max-width: 500px;" src="{{asset('user/assets/images/posterppdb.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <!-- <h6>About Us</h6> -->
            <h2>Prakata Kepala Sekolah</h2>
          </div>
          @endsection