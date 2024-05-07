@extends('user.master')
@section('master')
<section class="meetings-page">
    <div class="container">
      <div class="row">
        <!-- Blog Post -->
        <div class="col-md-8 col-sm-8">
          <div class="post-content">
            <!-- Post Image -->
            <div class="post-img">
              <img src="{{asset('storage/'.$data->foto_event)}}" alt="" />
            </div>
            <!-- /Post Image-->

            <!-- Post Meta-->
            <div class="post-meta">
              <ul class="list-inline">
                <li>
                  <a href="#"><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($data->created_at)->formatLocalized('%A, %d %B %Y') }}</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-user"></i>by {{$data->pembuat}}</a>
                </li>
              </ul>
            </div>
            <!-- /Post Meta-->

            <!-- Post Description -->
            <div class="post-description">
              <h3>{{$data->judul_event}}</h3>
              <p>{{$data->berita}}</p>
            </div>
            <!-- /Post Description -->

            <!-- Comment list -->
           
            <!-- /Comment Section -->
          </div>
        </div>
        <!-- /Blog Post -->

        <!-- Right Sidebar -->
        <div class="col-md-4 col-sm-4">
          <div class="widget widget-sidebar">
            <div class="search-box">
              <form>
                <input type="search" class="form-control" placeholder="Search" />
                <i class="fa fa-search"></i>
              </form>
            </div>
          </div>

          <!--Start popular Post -->
          <div class="widget-main">
            <h4 class="text-light">Event Terbaru</h4>
            @foreach ($news as $item )
            
            <div class="sidebar-widget clearfix">
              <a href="{{ route('blog.user', $item->id) }}"><img src="{{asset('storage/'.$item->foto_event)}}" alt="" /></a>
              <p class="sidebar-widget-title text-light"><a href="{{ route('blog.user', $item->id) }}">{{$item->judul_event}} </a></p>
              <p class="date text-light">{{$item->created_at}}</p>
            </div>
            @endforeach
           
          </div>
          <!-- / popular Post -->

          <!--start post categories-->
         
          <!--/ post categories-->

          <!-- Text -->
          
          <!-- /Text -->

          <!-- Tags -->
         
          <!-- /Tags -->
        </div>
        <!-- /right Sidebar -->
      </div>
      <!-- /row -->
    </div>
  </section>
@endsection