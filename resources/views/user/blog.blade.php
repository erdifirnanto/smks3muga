@extends('user.master')
@section('master')
<section>
  <div class="container" style="margin-top: 200px;">
    <div class="row">
      <!-- Blog Post -->
      <div class="col-md-8 col-sm-8">
        <div class="post-content">
          <h1 class="mb-3">{{$data->judul_event}}</h1>

          <!-- Post Image -->
          <div class="post-img">
            <img style="border-radius: 20px; margin-bottom: 20px;" src="{{asset('storage/'.$data->foto_event)}}" alt="" />
          </div>
          <!-- /Post Image-->

          <!-- Post Meta-->
          <div class="post-meta">
            <ul class="list-inline">
              <li>
                <a href="#"><i class="fa fa-calendar m-2"></i>{{ \Carbon\Carbon::parse($data->created_at)->formatLocalized('%A, %d %B %Y') }}</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-user m-2"></i>by {{$data->pembuat}}</a>
              </li>
            </ul>
          </div>
          <!-- /Post Meta-->

          <!-- Post Description -->
          <div class="post-description mt-5">
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

              <div class="row">
                <div class=".col-md-10 col-sm-10">
                  <input type="search" class="form-control" placeholder="Search" />
                </div>
                <div class="col-md-2 col-sm-2">
                  <i class="fa fa-search"></i>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!--Start popular Post -->
        <div class="widget-main" style="margin-top: 40px;">
          <h4 class="text-dark d-flex justify-content-center" style="margin-bottom: 30px;">Event Terbaru</h4>
          @foreach ($news as $item )

          <div class="sidebar-widget clearfix mt-2">
            <a href="{{ route('blog.user', $item->id) }}"><img src="{{asset('storage/'.$item->foto_event)}}" alt="" /></a>
            <div class="sidebar-widget-title d-flex justify-content-center mt-4"><a href="{{ route('blog.user', $item->id) }}">
                <h6 class="text-dark">{{$item->judul_event}}</h6>
              </a></div>
            <!-- <p class="date text-dark">Dibuat : {{--$item->created_at--}}</p> -->
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