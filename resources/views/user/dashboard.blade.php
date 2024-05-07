@extends('user.master')
@section('master')
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('user/images/background.mp4') }}" type="video/mp4" />
        </video>
        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Welcome To</h6>
                            {{-- <img style="width: 100px; height:110px;" src="{{asset('user/images/logo-sekolah.png')}}"alt=""> --}}
                            <h2>SMK SAFINATUL HUDA</h2>
                            <p>Sekolah menengah Kejuruan yang kreatif dan Unggul dalam bidang Tahfidz dan Tarjim Al-Qur'an,
                                Sains dan Teknologi</p>
                            <div class="main-button-red">
                                <!-- <div class="scroll-to-section"><a href="form.html">JPendaftaran</a></div> -->
                                <a href="{{ route('user.pendaftaran') }}">Pendaftaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">
                        @foreach ($foto_prestasi as $item => $row)
                            <div class="item">
                                <div class="down-content">
                                    <img width="30px"  src="{{ asset('storage/' . $row->foto_prestasi) }}" alt="thumbnail" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <section class="upcoming-meetings" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tentang</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="content-tab-1">
                        <ul class="navigation">
                            <a class="active" aria-expanded="true" href="#tab-content-1" data-toggle="tab">
                                <li>
                                    <i class="fa fa-desktop"></i>
                                    <h4>Profil</h4>
                                    <div class="tab-arrow"></div>
                                </li>
                            </a>
                            <a aria-expanded="true" href="#tab-content-2" data-toggle="tab">
                                <li>
                                    <i class="fa fa-cubes"></i>
                                    <h4>Ketenaga Kerjaan</h4>
                                    <div class="tab-arrow"></div>
                                </li>
                            </a>
                            <a aria-expanded="true" href="#tab-content-3" data-toggle="tab">
                                <li>
                                    <i class="fa fa-institution"></i>
                                    <h4>Visi Misi</h4>
                                    <div class="tab-arrow"></div>
                                </li>
                            </a>
                            <a aria-expanded="true" href="#tab-content-4" data-toggle="tab">
                                <li>
                                    <i class="fa fa-bullseye"></i>
                                    <h4>Tujuan</h4>
                                    <div class="tab-arrow"></div>
                                </li>
                            </a>
                        </ul>

                        <div class="tab-content-main">
                            <div class="container">
                                <div class="tab-content">
                                    <div class="tab-pane active in" id="tab-content-1">
                                        <!-- Features Icon-->
                                        <div class="row">
                                            {{-- <div class="col-md-6 margin-bottom-30">
                                                <div class="tab1-features">
                                                    <div class="icon"><i class="fa fa-star-o"></i></div>
                                                    <div class="info">
                                                        <h4>Dedicated Support & Updates</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit
                                                            amet. Et netus et malesuada fames ac turpis egestas tristique
                                                            senectus.</p>
                                                    </div>
                                                </div>

                                                <div class="tab1-features">
                                                    <div class="icon"><i class="fa fa-codepen"></i></div>
                                                    <div class="info">
                                                        <h4>multipurpose theme</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit
                                                            amet. Et netus et malesuada fames ac turpis egestas tristique
                                                            senectus.</p>
                                                    </div>
                                                </div>

                                                <div class="tab1-features">
                                                    <div class="icon"><i class="fa fa-heart-o"></i></div>
                                                    <div class="info">
                                                        <h4>Design With Love</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit
                                                            amet. Et netus et malesuada fames ac turpis egestas tristique
                                                            senectus.</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-6">
                                                <div class="core-features">
                                                    <p style="font-size: 15px">
                                                        SMK Safinatul Huda merupakan sekolah menengah kejuruan swasta yang
                                                        beralamatkan di JI Pondok Nongko RT.02/RW.02, Dusun Secawan,
                                                        Dadapan, Kec. Kabat, Banyuwangi- Jawa Timur, Indonesia. Sekolah ini
                                                        didirikan pada tahun 2016 dengan standar kompetensi KRIYA KREATIF
                                                        BATIK DAN TEKSTIL. Selain fokus pada prestasi akademik, SMK
                                                        Safinatul Huda juga memberikan perhatian besar pada pengembangan
                                                        karakter, akhlak dan ilmu agama siswa sehinnga mempunyai keunggulan
                                                        yang diantaranya :
                                                    </p>

                                                    <ul class="list">
                                                        <li>Terwujudnya Peserta Didik yang hafal Al-Qur'an dan memahami ilmu
                                                            Al-Qur'an</li>
                                                        <li>Menerapkan nilai-nilai Islami</li>
                                                        <li>Tenaga pengajar yang kompeten.</li>
                                                        <li>Lulus dapat bekerja atau kuliah</li>
                                                        <li>Keberhasilan menjadi Enterpreneur yang unggul</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!--End features Icon-->

                                            <!--  Start Carousel-->
                                            <div class="col-md-6">
                                                <div class="play-video popup-video">
                                                    <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                                              <div class="tab-carousel">
                                                                                <div class="item"><img src="assets/images/course-01.jpg" alt="" /></div>
                                                                                <div class="item"><img src="assets/images/course-03.jpg" alt="" /></div>
                                                                                <div class="item"><img src="assets/images/course-04.jpg" alt="" /></div>
                                                                              </div>
                                                                            </div> -->
                                        </div>

                                        <!-- End Carousel-->
                                    </div>
                                    <!-- End Tab content 1-->

                                    <!-- Start Tab content 2-->
                                    <div class="tab-pane" id="tab-content-2">
                                        <h2 class="tab">Ketenaga Kerjaan</h2>
                                        <p style="font-size: 15px">Selain siswa, pendidik/tenaga kependidikan juga sangat
                                            diperlukan. Untuk menjamin
                                            dan meningkatkan mutu pendidikan, SMK bekerja sama dengan guru yang profesional
                                            dan berpengalaman minimal berijasah S1 atau D4 yang sesuai dengan bidangnya.
                                            Selain guru juga tenaga tata usaha dan operator sekolah juga sangat penting
                                            untuk membantu meningkatkan keberhasilan suatu lembaga pendidikan</p>
                                    </div>

                                    <div class="tab-pane" id="tab-content-3">
                                        <h2 class="tab">Visi</h2>
                                        <p class="text-center mb-5" style="font-size: 17px;">Menjadi Sekolah Menengah
                                            Kejuruan yang unggul dalam bidang Tahfidzul Qur'an, Sains dan Teknologi.</p>
                                        <h2 class="tab">Misi</h2>
                                        <ol class="list">
                                            <li>Menyelenggarakan pendidikan terpadu di tingkat Sekolah Menengah Kejuruan
                                                dengan mengintegrasikan ilmu pengetahuan Agama, Tahfidz Al Qur'an, Sains dan
                                                Teknologi secara utuh.</li>
                                            <li>Membina peserta didik agar memiliki kecerdasan yang integral (kecerdasan
                                                spiritual, emosional, sosial dan intelektual)</li>
                                            <li>Mencetak generasi yang bertaqwa, mampu bersaing, memiliki skill, santun,
                                                mandiri dan kreatif</li>
                                            <li>Menumbuh kembangkan rasa cinta terhadap Agama, Al Qur'an Masyarakat, Nusa
                                                dan Bangsa. </li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane" id="tab-content-4">
                                        <h2 class="tab">Tujuan</h2>
                                        <p style="font-size: 16px">Tujuan dari pendirian SMK Safinatul Huda ini adalah:</p>
                                        <ol class="list">
                                            <li>Membantu santri pondok pesantren Safinatul Huda Banyuwangi lulusan SMP Al
                                                Qur'an Safinda untuk bisa melanjutkan pendidikan formal di Sekolah Menengah
                                                Kejuruan, agar nantinya santri ponpes tidak pindah/keluar sehingga
                                                pendalaman ilmu agama semakin matang.</li>
                                            <li>Memberikan perluasan akses masyarakat dan lulusan MT/SMP sederajat di
                                                wilayah Banyuwangi khususnya dan di luar daerah Banyuwangi di seluruh
                                                Indonesia pada umumnya untuk dapat melanjutkan studi di Pondok Pesantren
                                                yang terintregasi dengan Sekolah Menengah Kejuruan</li>
                                            <li>Mewujudkan sistem dan iklim pendidikan yang demokratis dan bermutu guna,
                                                kreatif, inovatif, berwawasan kebangsaan, cerdas, sehat, disiplin, tanggung
                                                jawab, dan berketerampilan serta menguasai keterampilan dan mu pengetahuan
                                                dan teknologi dalam rangka meningkatkan kualitas manusia Indonesia.</li>
                                            <li>Membangun sarana untuk meningkatkan pengetahuan yang trampil, terdidik dan
                                                profesional serta mampu mengembangkan diri sejalan dengan perkembangan ilmu
                                                pengetahuan dan teknologi.</li>
                                            <li>Membentuk model atau sekolah rujukan nasional yang mempunyai keunggulan
                                                Program Studi Kriya Kreatif Batik dan Tekstil serta mempunyai wawasan
                                                nasional dan wawasan kerja.</li>
                                            <li>Meningkatkan daya tampung dan mutu pendidikan serta meningkatkan peran SMK
                                                Safinatul Huda dalam menerapkan kebijakan keterkaitan dan kesepadanan
                                                sehingga dapat meningkatkan kualitas dan relefansi antara sekolah dengan
                                                kebutuhan masyarakat, dunia usaha dan dunia industri.</li>
                                            <li>Meningkatkan mutu sumber daya manusia yang berkualitas dalam mengembangkan
                                                potensi daerah.</li>
                                            <li>Meningkatkan kesejahteraan masyarakat dalam memberdayakan peluang yang ada
                                                dan dapat di kembangkan di sekolah dalam menyiapkan tenaga - tenaga
                                                terampil.</li>
                                            <li>Menyiapkan tamatan agar menjadi Warga Negara Indonesia yang bertaqwa, hafidz
                                                Qur'an, produktif, adaptif dan kreatif.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.tab-content-main-->
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!-- prestasi -->

    <!-- end -->
    <!-- sarana dan prasarana -->
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="judul">
                            <h2>Sarana Dan Prasarana</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="content-tab-1">
                        <ul class="navigation">
                            <a aria-expanded="true" href="#tab-content-5" data-toggle="tab">
                                <li>

                                    <i class="fa fa-mosque"></i>
                                    <h4>Masjid</h4>

                                    <div class="tab-arrow"></div>
                                </li>
                            </a>
                            <a aria-expanded="true" href="#tab-content-6" data-toggle="tab">
                                <li>

                                    <i class="fa-solid fa-bed"></i>
                                    <h4>Asrama</h4>

                                    <div class="tab-arrow"></div>
                                </li>
                            </a>
                        </ul>
                        <div class="tab-content-main">
                            <div class="container">
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab-content-5">
                                        <div class="tab-content-5">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="tab-carousel">
                                                        <div class="item"><img
                                                                src="{{ asset('user/assets/images/course-01.jpg') }}"
                                                                alt="" /></div>
                                                        <div class="item"><img
                                                                src="{{ asset('user/assets/images/course-02.jpg') }}"
                                                                alt="" /></div>
                                                        <div class="item"><img
                                                                src="{{ asset('user/assets/images/course-04.jpg') }}"
                                                                alt="" /></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="core-features">
                                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in
                                                            vestibulum lorem. Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Curabitur euismod enim a metus adipiscing
                                                            aliquam. Vestibulum in vestibulum lorem. Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit. Curabitur euismod enim a
                                                            metus adipiscing.</p> --}}

                                                        <p>Masjid sekolah yang terletak di dalam kompleks pendidikan SMK
                                                            Safinatul Huda adalah sebuah bangunan yang indah dengan
                                                            arsitektur yang mencerminkan nilai-nilai Islam dan sekaligus
                                                            sesuai dengan lingkungan sekolah. Masjid ini menjadi pusat
                                                            kegiatan keagamaan bagi siswa dan staf sekolah, serta menjadi
                                                            tempat ibadah bagi masyarakat sekitar.</p>
                                                        <br>
                                                        {{-- <p>Masjid ini memiliki ruang salat utama yang luas, dengan lantai
                                                            yang dilapisi karpet yang lembut Ruang salat ini dapat menampung
                                                            sejumlah besar jamaah untuk melaksanakan salat berjamaah, baik
                                                            salat wajib maupun salat sunnah. Saf-saf yang tersusun rapi
                                                            memudahkan jamaah dalam melaksanakan salat berjamaah dengan
                                                            khushu' dan tertib</p>
                                                        <br> --}}
                                                        <p>Dengan adanya masjid sekolah ini, siswa memiliki tempat yang
                                                            nyaman untuk beribadah dan meningkatkan pemahaman agama mereka.
                                                            Masjid sekolah ini juga menjadi sarana untuk memupuk nilai-nilai
                                                            keagamaan, mengajarkan toleransi dan kerukunan antarumat
                                                            beragama, serta mendorong siswa untuk berkontribusi dalam
                                                            kegiatan keagamaan dan sosial di sekolah dan masyarakat.</p>


                                                        {{-- <ul class="list">
                                                            <li>Multiple unique designs</li>
                                                            <li>Clean coded, responsive and multipurpose</li>
                                                            <li>Pages valid on w3c.</li>
                                                            <li>Well documented.</li>
                                                            <li>Easy to customization.</li>
                                                        </ul> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-content-6">
                                        <div class="tab-content-6">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="core-features">
                                                        <p>Fasilitas asrama sekolah atau pondok pesantren ini dirancang
                                                            untuk menciptakan lingkungan yang kondusif bagi siswa atau
                                                            santri dalam belajar, beribadah, dan menjalani kehidupan
                                                            sehari-hari. Fasilitas ini mendukung kegiatan pendidikan dan
                                                            pengembangan diri, serta memberikan kenyamanan dan rasa aman
                                                            kepada penghuninya. Berikut adalah
                                                            deskripsi fasilitas asrama sekolah atau pondok pesantren:</p>
                                                        <br>
                                                        <ul class="list">
                                                            <li>Kamar Tidur: Asrama ini dilengkapi dengan kamar tidur yang
                                                                bersih dan nyaman</li>
                                                            <li>Ruang Belajar: Asrama ini memiliki ruang belajar yang
                                                                nyaman, dilengkapi dengan meja, kursi, dan fasilitas
                                                                pendukung lainnya</li>
                                                            <li>Ruang Makan: Asrama ini dilengkapi dengan ruang makan atau
                                                                kantin yang memadai untuk menyediakan makanan kepada
                                                                penghuni asrama.</li>
                                                            <li>Ruang Olahraga: Asrama ini menyediakan fasilitas olahraga,
                                                                seperti lapangan atau ruang olahraga dalam asrama.</li>
                                                            <li>Ruang Kegiatan: Fasilitas asrama ini juga mencakup ruang
                                                                kegiatan yang dapat digunakan untuk berbagai kegiatan sosial
                                                                dan pendidikan</li>

                                                        </ul>
                                                        {{-- <br>
                                                        <p>Fasilitas asrama sekolah atau pondok pesantren ini dirancang
                                                            untuk menciptakan lingkungan yang kondusif bagi siswa atau
                                                            santri dalam belajar, beribadah, dan menjalani kehidupan
                                                            sehari-hari. Fasilitas ini mendukung kegiatan pendidikan dan
                                                            pengembangan diri, serta memberikan kenyamanan dan rasa aman
                                                            kepada penghuninya.</p> --}}


                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="tab-carousel">
                                                        <div class="item"><img
                                                                src="{{ asset('user/assets/images/course-03.jpg') }}"
                                                                alt="" /></div>
                                                        <div class="item"><img
                                                                src="{{ asset('user/assets/images/course-02.jpg') }}"
                                                                alt="" /></div>
                                                        <div class="item"><img
                                                                src="{{ asset('user/assets/images/course-04.jpg') }}"
                                                                alt="" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.tab-content-main-->
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
    </section>
    <!-- end sarana -->

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="judul">
                            <h2>Contac Us</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>0813 9114 4494</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>info@meeting.edu</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>Jl. Pondok Nongko, Dsn. Secawan Desa Dadapan, Kec. Kabat - Banyuwangi</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.meeting.edu</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.454723877166!2d114.34415517370957!3d-8.257453491776236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15b2240a611f1%3A0x6ec3885359f2bb74!2sSMK%20SAFINATUL%20HUDA%20BANYUWANGI!5e0!3m2!1sid!2sid!4v1688009952707!5m2!1sid!2sid"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2023 Poliwangi Co., Ltd. All Rights Reserved.></p>
        </div>
    </section>
@endsection
