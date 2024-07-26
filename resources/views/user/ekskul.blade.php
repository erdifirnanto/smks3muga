@extends('user.master')
@section('master')
<div id="about" class="about-us section mt-4">
  <div style="text-align: center;" class="section-heading">
    <h2>Ekstrakurikuler SMK Muhammadiyah 3 Tegaldlimo</h2>
  </div>
</div>

<div id="about" class="about-us section" style="margin-top: -120px;">
  <div class="container">
    @foreach ($data as $item => $row)
    <div class="row" style="margin-bottom: 50px;">
      <div class="col-lg-6">
        <div class="d-flex justify-content-center left-image wow fadeInLeft rounded" data-wow-duration="1s" data-wow-delay="0.5s">
          <img class="" style="width:600px; height:auto; aspect-ratio: 6 / 3; border-radius:30px" src="{{ asset('storage/'.$row->foto_ekskuls) }}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <h2>{{ $row->judul_ekskuls }}</h2>
        </div>
        <p>
        <div style="text-align:justify">
          {{ $row->deskripsi_ekskuls }}
        </div>
        </p>
      </div>
    </div>
    @endforeach


  </div>
</div>

@endsection