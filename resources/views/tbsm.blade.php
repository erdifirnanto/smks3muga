@extends('user.master')

@section('master')

<div id="pplg" class="category-page section">
  <div class="container">
    <div class="section-heading">
      <h2>Guru TBSM</h2>
    </div>
    <div class="row">
      <!-- Daftar gambar guru PPLG -->
      <div class="col-md-4 mb-4">
        <div class="team-item text-center">
          <img src="{{ asset('user/assets/images/luqman.png') }}" alt="Guru TBSM 1" style="max-width: 200px; height: auto; margin-bottom: 10px;">
          <h4 style="font-size: 1.2rem; margin-bottom: 5px;">Nama Guru 1</h4>
          <p style="font-size: 0.9rem; color: #555;">Deskripsi Guru 1</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="team-item text-center">
          <img src="{{ asset('user/assets/images/guru2.jpg') }}" alt="Guru TBSM 2" style="max-width: 200px; height: auto; margin-bottom: 10px;">
          <h4 style="font-size: 1.2rem; margin-bottom: 5px;">Nama Guru 2</h4>
          <p style="font-size: 0.9rem; color: #555;">Deskripsi Guru 2</p>
        </div>
      </div>
      <!-- Tambahkan gambar guru lainnya di sini -->
    </div>
  </div>
</div>

@endsection
