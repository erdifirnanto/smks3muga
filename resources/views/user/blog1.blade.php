@extends('user.master')
@section('master')
<section>
  <div class="container" style="margin-top: 150px;">
    <div class="row">
      <!-- Blog Post -->
      <div class="col-md-8 col-sm-8">
        <div class="post-content">
          <h1 class="mb-3 d-flex justify-content-center">{{$data->judul_berita}}</h1>

          <!-- Post Image -->
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-sm-8">
                <div class="img-container mb-3">
                  <img class="" src="{{ asset('storage/'.$data->foto_berita) }}" class="img-fluid" alt="Lorem ipsum dolor sit amet">
                </div>
              </div>
            </div>
          </div>


          <div class="card-cover">
            <!-- <img src="{{asset('storage/'.$data->foto_berita)}}" alt="Cover Image" class="cover-img"> -->
            <div class="card-content">
              <!-- Content here -->
            </div>
          </div>
          <!-- /Post Image-->

          <!-- Post Meta-->
          <div class="post-meta d-flex justify-content-center">
            <ul class="list-inline" style="text-align: center;">
              <li>
                <a class="text-dark" href="#"><i class="fa fa-calendar m-2 text-dark"></i>{{ \Carbon\Carbon::parse($data->created_at)->formatLocalized('%A, %d %B %Y') }}</a>
              </li>
              <li>
                <a class="text-dark" href="#"><i class="fa fa-user m-2 text-dark"></i>by {{$data->pembuat}}</a>
              </li>
            </ul>
          </div>
          <!-- /Post Meta-->

          <!-- Post Description -->
          <div class="post-description mt-5">
            <h3>{{$data->judul_berita}}</h3>
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
          <h4 class="text-dark d-flex justify-content-center" style="margin-bottom: 30px;">Berita Terbaru</h4>
          @foreach ($news as $item )

          <div class="sidebar-widget clearfix mt-2">
            <a href="{{ route('blog1.user', $item->id) }}"><img src="{{asset('storage/'.$item->foto_berita)}}" alt="" /></a>
            <div class="sidebar-widget-title d-flex justify-content-center mt-4"><a href="{{ route('blog1.user', $item->id) }}">
                <h6 class="text-dark">{{$item->judul_berita}}</h6>
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

<style>
  .img-container {
    /* width: 700px; */
    /* height: 300px; */
    position: relative;
    padding-bottom: 75%;
    /* 4:3 ratio (3/4 * 100) */
    /* height: 0; */
    overflow: hidden;
  }

  .img-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
@endsection