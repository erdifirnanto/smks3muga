@extends('user.master')
@section('master')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Here are our upcoming</h6>
                    <h2>Prestasi</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="row grid">
                                <ul class="work-grid1 konten all">
                                    <!-- Work Item -->
                                    @foreach ($data as $item => $row)
                                    <li class="work-item thumnail-img mix corporate">
                                        <div class="work-image">
                                            <img src="{{ asset('storage/'.$row->foto_prestasi) }}" alt="thumbnail" />

                                            <!--Hover link-->
                                            <div class="hover-link">
                                                <a href="{{ asset('storage/'.$row->foto_prestasi) }}" class="popup-image">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                            <!--End link-->

                                            <!--Hover Caption-->
                                            <div class="work-caption">
                                                <h4>{{$row->judul_prestasi}}</h4>
                                                <p>{{$row->jenis_prestasi}}</p>
                                            </div>
                                            <!--End Caption-->
                                        </div>
                                        <!-- /.work-image-->
                                    </li>
                                    @endforeach
                                    
                                    
                                    <!--End Work Item -->

                                    <!-- Work Item -->

                                    <!--End Work Item -->
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
