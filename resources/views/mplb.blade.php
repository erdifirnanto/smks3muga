@extends('user.master')

@section('master')

<div id="pplg" class="category-page section">
  <div class="container">
    <div class="section-heading">
      <h2>Guru MPLB</h2>
    </div>
    <div class="row">
      <!-- Daftar gambar guru PPLG -->
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ asset('user/assets/images/guru1.jpg') }}" alt="Guru MPLB 1">
          <h4>Nama Guru 1</h4>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ asset('user/assets/images/guru2.jpg') }}" alt="Guru MPLB 2">
          <h4>Nama Guru 2</h4>
        </div>
      </div>
      <!-- Tambahkan gambar guru lainnya di sini -->
    </div>
  </div>
</div>

@endsection
