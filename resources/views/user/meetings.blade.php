@extends('user.master')
@section('master')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Here are our upcoming meetings</h6>
                    <h2>Event</h2>
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
                                @foreach ($data as $item => $row)
                                <div class="col-lg-4 templatemo-item-col konten all imp">
                                    <a href="{{route('blog.user',$row->id)}}">
                                        <div class="meeting-item work-item">
                                            <div class="thumb">
                                                <img src="{{ asset('storage/'.$row->foto_event) }}" alt="">
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>{{ \Carbon\Carbon::parse($row->created_at)->formatLocalized('%A, %d %B %Y') }}</h6>
                                                </div>
                                                <h4>{{$row->judul_event}}</h4>
                                                <p>{{Str::words($row->berita,6)}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                
                             
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                <br>Design: <a href="https://templatemo.com/page/1" target="_parent"
                    title="website templates">TemplateMo</a>
            </p>
        </div>
    </section>
@endsection
