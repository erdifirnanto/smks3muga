@extends('user.master')
@section('master')
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('dashboard.user') }}" class="logo"> SAFINDA </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('dashboard.user') }}#top">Home</a></li>
                            <li><a href="{{ route('dashboard.user') }}#about">Tentang</a></li>
                            <li><a href="prestasi.html">Prestasi</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)" class="active">Event</a>
                                <ul class="sub-menu">
                                    <li><a href="meetings.htmll">Berita Event</a></li>
                                    <li><a href="portoVidio.html">Vidio</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('dashboard.user') }}#courses">Sarana Dan Prasarana</a></li>
                            <li><a href="{{ route('dashboard.user') }}#contact">Contact Us</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="row grid">
                                <ul class="work-grid1 konten all">
                                    <!-- Work Item -->
                                    <li class="work-item thumnail-img mix corporate">
                                        <div class="work-image">
                                            <img src="{{ asset('user/images/works/img1.jpg') }}" alt="thumbnail" />

                                            <!--Hover link-->
                                            <div class="hover-link">
                                                <!-- <a href="single-work.html">
                             

                                                <a href="{{ asset('user/images/works/img1.jpg') }}" class="popup-image">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                            <!--End link-->

                                            <!--Hover Caption-->
                                            <div class="work-caption">
                                                <h4>Project Title</h4>
                                                <p>Photography</p>
                                            </div>
                                            <!--End Caption-->
                                        </div>
                                        <!-- /.work-image-->
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <ul class="pagination">
                                    <!-- <li>
                        <a href="#" class="next-page"><i class="fa fa-angle-left"></i></a>
                      </li>
                      <li><a href="#"  class="current-page">1</a></li>
                      <li class="active" class="current-page"><a href="#">2</a></li>
                      <li><a href="#"class="dots">...</a></li>
                      <li  class="current-page"><a href="#">5</a></li>
                      <li>
                        <a href="#" class="previous-page"><i class="fa fa-angle-right"></i></a>
                      </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer">
            <p>Copyright © 2023 Poliwangi Co., Ltd. All Rights Reserved</p>
        </div>
    </section>
@endsection
