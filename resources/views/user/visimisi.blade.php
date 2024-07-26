@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <!-- Visi Sekolah Section -->
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:500px;" src="{{ asset('user/assets/images/gurukaryawan.jpg') }}" alt="Visi Sekolah Image">
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

    <!-- Misi Sekolah Section -->
    <div style="margin-top: 60px;" class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:500px;" src="{{ asset('user/assets/images/gurukaryawan.jpg') }}" alt="Misi Sekolah Image">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <h2>Misi Sekolah</h2>
        </div>
        <div style="text-align:left; margin-top: 20px;">
          <div>1. Melaksanakan pendidikan berdasarkan Iman, Islam dan Taqwa</div>
          <div>2. Membentuk karakter pribadi siswa melalui ibadah</div>
          <div>3. Melaksanakan pendidikan yang unggul dibidang IPTEK</div>
          <div>4. Mencetak lulusan yang kompeten</div>
          <div>5. Membekali lulusan berwawasan kewirausahaan</div>
        </div>
      </div>
    </div>

    <!-- Tujuan Section -->
     <div style="margin-top: 60px;" class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:500px;" src="{{ asset('user/assets/images/gurukaryawan.jpg') }}" alt="Tujuan Sekolah Image">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <h2>Tujuan Sekolah</h2>
        </div>
        <div style="text-align:justify; margin-top: 20px;">
          <ul>
            <li>1. Terwujudnya SMK Muhammadiyah 3 Tegaldlimo sebagai lembaga unggul dan menjadi pilihan masyarakat.</li>
            <li>2. Terwujudnya lulusan SMK Muhammadiyah 3 Tegaldlimo yang memiliki daya saing yang tinggi untuk memasuki persaingan global.</li>
            <li>3. Terbinanya potensi diri anak lewat pengembangan bakat minat dalam kegiatan ekstrakurikuler.</li>
            <li>4. Terwujudnya kegiatan intra dan eksrakurikuler yang mampu mengembangkan potensi diri, perilaku kreatif sehingga menghasilkan prestasi yang unggul.</li>
            <li>5. Tersalurnya tamatan untuk bekerja di industry sesuai kompeteni keahliannya.</li>
            <li>6. Terbinanya hubungan kerjasama kemitraan saling menguntungkan dengan dunia usaha dunia industri, lembaga diklat serta stake holder yang relevan secara professional.</li>
            <li>7. Terbinanya kehidupan yang bersih aqidahnya, benar ibadahnya dan kokoh akhlaknya baik di sekolah maupun di luar sekolah.</li>
            <li>8. Terwujudnya kader muda Muhammadiyah yang mempunyai kompetensi dan integritas untuk berperan dalam masyarakat.</li>
          </ul>
        </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
