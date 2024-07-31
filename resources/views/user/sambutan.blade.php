@extends('user.master')
@section('master')

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="right-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img style="width:400px;" src="{{asset('user/assets/images/rahmi.png')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <!-- <h6>About Us</h6> -->
          <!-- <h2>Top <em>marketing</em> agency &amp; consult your website <span>with us</span></h2> -->
          <h2>Sambutan Kepala Sekolah</h2>
        </div>
        <!-- <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>750+</h4>
                <h6>projects finished</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>340+</h4>
                <h6>happy clients</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>128+</h4>
                <h6>awards</h6>
              </div>
            </div>
          </div> -->
        <h5 style="text-align: center;">
          بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h5>
        <h5 style="text-align: center;">
          ٱلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ ٱللَّٰهِ وَبَرَكَاتُهُ</h5>
        <p>
          <!-- <a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent">SEO Dream</a> -->
        <div style="text-align:justify">
          Puji syukur kami panjatkan kehadirat Allah SWT atas rahmat dan hidayahNya kita masih diberikan kesehatan, kekuatan dalam melaksanakan aktivitas. Sholawat beserta salam selalu tercurah kepada nabi agung Muhammad SAW, keluarga, sahabat, dan umatnya yang telah membawa zaman kegelapan sampai zaman pencerahan.</div><br>

          <div style="text-align:justify">SMK Muhammadiyah 3 Tegaldlimo sebagai lembaga pendidikan kejuruan. Dengan 3 program keahlian yang dikembangkan yaitu Pengembangan Perangkat Lunak dan Gim (PPLG), Manajemen Perkantoran dan Layanan Bisnis (MPLB), Teknik Bisnis dan Sepeda Motor (TBSM), Teknik Kendaraan Ringan Otomotif (TKRO) yang sudah terakreditasi “B”.</div><br> 

          <div style="text-align:justify">Fasilitas pembelajaran baik fasilitas ruang praktik, peralatan praktik atau fasilitas umum lainnya sudah mendukung untuk pembelajaran peserta didik. Pengembangan bakat peserta didik di tampung dalam wadah ekstrakurikuler, dan kegiatan-kegiatan lain yang mendukung karakter peserta didik. Kerjasama dengan dunia usaha, dunia industri dan dunia kerja untuk mengembangkan kompetensi peserta didik dilakukan untuk menyesuaikan dengan tuntutan pasar kerja. Harapannya lulusan SMK Muhammadiyah 3 Tegaldlimo siap bekerja, berwirausaha dan melanjutkan sesuai dengan bidang keahlian untuk menjadi generasi dan kader yang membanggakan orang tua, masyarakat dan sekolah, serta mampu memberikan kontribusi positif kepada bangsa dan Negara.</div>
        </div>
        </p>
        <!-- <div class="main-green-button mt-4"><a href="#">RAHMI NUR AINI, M.PD.</a></div> -->
      </div>
    </div>
  </div>
</div>

    <!-- Start DATA -->
    <div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding:50px;">
    
        <h1 class="mb-5">Daftar Guru dan Karyawan</h1>

        <div class="filter">
            <button class="filter-btn" onclick="filterCards('all')">Semua</button>
            <button class="filter-btn" onclick="filterCards('PPLG')">PPLG</button>
            <button class="filter-btn" onclick="filterCards('MPLB')">MPLB</button>
            <button class="filter-btn" onclick="filterCards('TBSM')">TBSM</button>
            <button class="filter-btn" onclick="filterCards('TKRO')">TKRO</button>
            <button class="filter-btn" onclick="filterCards('Normatif')">Normatif</button>
            <button class="filter-btn" onclick="filterCards('Karyawan')">Karyawan</button>
            <button class="filter-btn" onclick="filterCards('Waka')">Waka</button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cards ">

                        <!-- PPLG -->
                        <div class="card card-color1" data-category="PPLG">
                            <img src="{{ asset('user/assets/images/navashoqibatul.png') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="PPLG">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Nava S. K., S.Tr.Kom.</h6>
                                <p>K3 PPLG</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="PPLG">
                            <img src="{{ asset('user/assets/images/luqman.png') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="PPLG">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Luqman F., S.Kom.</h6>
                                <p>Produktif PPLG</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="PPLG">
                            <img src="{{ asset('user/assets/images/anang.jpg') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="PPLG">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Anang H., S.Kom.</h6>
                                <p>Produktif PPLG</p>
                            </div>
                        </div>

                        <!-- MPLB -->
                        <div class="card card-color1" data-category="MPLB">
                            <img src="{{ asset('user/assets/images/mariyati.png') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="MPLB">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Mariyati, S.E.</h6>
                                <p>K3 MPLB</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="MPLB">
                            <img src="{{ asset('user/assets/images/khoirulanam.png') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="MPLB">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Khoirul A., S.E., M.M. MOS.</h6>
                                <p>Produktif MPLB</p>
                            </div>
                        </div>
                        <div class="card card-color2" data-category="MPLB">
                            <img src="{{ asset('user/assets/images/kholil.png') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="MPLB">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">M. Muhtar K., S.E.</h6>
                                <p>Produktif MPLB</p>
                            </div>
                        </div>

                        <!-- TBSM -->
                        <div class="card card-color1" data-category="TBSM">
                            <img src="{{ asset('user/assets/images/kholil.png') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TBSM">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Jenny P., S.T.</h6>
                                <p>K3 TBSM</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="TBSM">
                            <img src="{{ asset('user/assets/images/rohman.png') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TBSM">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Rohman S., S.T.</h6>
                                <p>Produktif TBSM</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="TBSM">
                            <img src="{{ asset('user/assets/images/rendizulfikar.jpg') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TBSM">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Rendi Zulfikar</h6>
                                <p>Toolman TBSM</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="TBSM">
                            <img src="{{ asset('user/assets/images/risqi.jpg') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TBSM">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Mohammad Rizki A.</h6>
                                <p>Toolman TBSM</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="TBSM">
                            <img src="{{ asset('user/assets/images/rino.jpg') }}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TBSM">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Rino</h6>
                                <p>Toolman TBSM</p>
                            </div>
                        </div>

                        <!-- TKRO -->
                        <div class="card card-color1" data-category="TKRO">
                            <img src="{{asset('user/assets/images/ahmadmarzuki.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TKRO">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Akhmad Marzuki, S.T.</h6>
                              <p class="text-dark">K3 TKRO</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="TKRO">
                            <img src="{{asset('user/assets/images/febi.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TKRO">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Febi Islam R., S.T.</h6>
                                <p>Produktif TKRO</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="TKRO">
                            <img src="{{asset('user/assets/images/amar.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="TKRO">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Amar Abdul A.</h6>
                                <p>Toolman TKRO</p>
                            </div>
                        </div>

                        <!-- NORMATIF -->
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/febri.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Febriyan E. P., S.Si.</h6>
                                <p>Matematika</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/nurul.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Nurul A., S.Pd.</h6>
                                <p>IPAS</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/unsa.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Unsa A. R., S.Pd.</h6>
                                <p>ISMUBA</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/sri.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Sri K., S.Ag.</h6>
                                <p>Muatan Lokal</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/ditia.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Ditia P. D., S.Pd.</h6>
                                <p>Matematika</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/rendi.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Rendi K., S.Pd.</h6>
                                <p>Bimbingan Konseling</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/sugeng.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Sugeng W., S.Pd.</h6>
                                <p>Bimbingan Konseling</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/syamsul.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Syamsul H., S.THI</h6>
                                <p>Bimbingan Konseling</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/habib.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">M. Habib M., S.Pd.</h6>
                                <p>Matematika</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/fera.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Fera R., S.Pd.</h6>
                                <p>Bahasa Inggris</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/mareti.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Mareti Kensiwi, S.Pd.</h6>
                                <p>Bahasa Indonesia</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/suwono.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Suwono</h6>
                                <p>Pendidikan Jasmani</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/candra.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Candra Y. D., S.Pd.</h6>
                                <p>PPKN</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Normatif">
                            <img src="{{asset('user/assets/images/dewi.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Normatif">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Dewi H. K. K., S.Pd.</h6>
                                <p>Bahasa Indonesia</p>
                            </div>
                        </div>

                        <!-- KARYAWAN -->
                        <div class="card card-color2" data-category="Karyawan">
                            <img src="{{asset('user/assets/images/sinta.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Karyawan">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Shinta Z. P., S.M.</h6>
                                <p>Kepala Perpustakaan</p>
                            </div>
                        </div>
                        <div class="card card-color2" data-category="Karyawan">
                            <img src="{{asset('user/assets/images/febri.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Karyawan">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Febriyan E. P., S.Si</h6>
                                <p>Kepala Tata Usaha</p>
                            </div>
                        </div>
                        <div class="card card-color2" data-category="Karyawan">
                            <img src="{{asset('user/assets/images/qori.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Karyawan">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Qoriah N. U., A.Md.Kom.</h6>
                                <p>Staff Tata Usaha</p>
                            </div>
                        </div>
                        <div class="card card-color2" data-category="Karyawan">
                            <img src="{{asset('user/assets/images/nisa.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Karyawan">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Annisa Nur Nahar</h6>
                                <p>Staff Tata Usaha</p>
                            </div>
                        </div>
                        <div class="card card-color2" data-category="Karyawan">
                            <img src="{{asset('user/assets/images/faiza.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Karyawan">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Faizatul C., S.H.</h6>
                                <p>Staff Tata Usaha</p>
                            </div>
                        </div>
                        <div class="card card-color2" data-category="Karyawan">
                            <img src="{{asset('user/assets/images/tutik.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Karyawan">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Tutik Wahyuni</h6>
                                <p>Staff Koperasi</p>
                            </div>
                        </div>
                        <div class="card card-color2" data-category="Karyawan">
                            <img src="{{asset('user/assets/images/katimin.jpg')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Karyawan">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Katimin</h6>
                                <p>Satpam</p>
                            </div>
                        </div>

                        <!-- WAKA -->
                        <div class="card card-color1" data-category="Waka">
                            <img src="{{asset('user/assets/images/mareti.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Waka">
                            <div class="card-content">
                              <h6 class="text-dark" style="font-weight: bold;">Mareti K., S.Pd.</h6>
                                <p>Waka SDM</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Waka">
                            <img src="{{asset('user/assets/images/liya.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Waka">
                            <div class="card-content">
                                <h6 class="text-dark" style="font-weight: bold;">Liya E., S.Pd.I, M.Pd</h6>
                                <p>Waka ISMUBA</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Waka">
                            <img src="{{asset('user/assets/images/rohman.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Waka">
                            <div class="card-content">
                                <h6 class="text-dark" style="font-weight: bold;">Rohman S., S.T.</h6>
                                <p>Waka Sarpras</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Waka">
                            <img src="{{asset('user/assets/images/dewi.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Waka">
                            <div class="card-content">
                                <h6 class="text-dark" style="font-weight: bold;">Dewi Hajar K. K., S.Pd.</h6>
                                <p>Waka Kesiswaan</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Waka">
                            <img src="{{asset('user/assets/images/khoirulanam.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Waka">
                            <div class="card-content">
                                <h6 class="text-dark" style="font-weight: bold;">Khoirul A., S.E., M.M., MOS</h6>
                                <p>Waka Humas</p>
                            </div>
                        </div>
                        <div class="card card-color1" data-category="Waka">
                            <img src="{{asset('user/assets/images/hadi.png')}}"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="Waka">
                            <div class="card-content">
                                <h6 class="text-dark" style="font-weight: bold;">M. Hadi M., S.T.</h6>
                                <p>Waka Kurikulum</p>
                            </div>
                        </div>

                        <!-- END -->
                    </div>
                </div>
            </div>
        </div>



    </div>
    <style>
        h1 {
            text-align: center;
        }

        .filter {
            margin-bottom: 20px;
            text-align: center;
        }

        .filter-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .filter-btn:hover {
            background-color: #0056b3;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            transition: all 0.5s ease;
        }

        .card {
            color: #ffffff;
            padding: 0;
            border-radius: 8px;
            box-sizing: border-box;
            text-align: center;
            transition: all 0.5s ease;
            opacity: 1;
            transform: translateY(0);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-content {
            padding: 20px;
        }

        .card.hidden {
            display: none;
        }

        .card-color1 {
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .card-color2 {
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
    </style>
    <script>
        function filterCards(category) {
            var cards = document.getElementsByClassName('card');

            for (var i = 0; i < cards.length; i++) {
                if (category === 'all') {
                    cards[i].classList.remove('hidden');
                } else {
                    if (cards[i].getAttribute('data-category') === category) {
                        cards[i].classList.remove('hidden');
                    } else {
                        cards[i].classList.add('hidden');
                    }
                }
            }
        }

    </script>
    <!-- END DATA -->

@endsection