@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:500px;" src="{{asset('user/assets/images/gurukaryawan.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <h2>Visi Sekolah</h2>
        </div>
        <p>
        <div style="text-align:justify">
          Terwujudnya peserta didik yang islami, nasionalis, profesional dan berwawasan kewirausahaan.
        </div>
      </div>
    </div>

    <div style="margin-top: 60px;" class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <div style="text-align: center;" class="section-heading">
            <h2>Misi Sekolah</h2>
          </div>

        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div style="text-align:left">
          <div> 1. Melaksanakan pendidikan berdasarkan Iman, Islam dan Taqwa </div>
          <div> 2. Membentuk karakter pribadi siswa melalui ibadah </div>
          <div> 3. Melaksanakan pendidikan yang unggul dibidang IPTEK </div>
          <div> 4. Mencetak lulusan yang kompeten </div>
          <div> 5. Membekali lulusan berwawasan kewirausahaan </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>
</div>
</div>
@endsection