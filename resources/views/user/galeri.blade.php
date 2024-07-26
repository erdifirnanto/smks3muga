@extends('user.master')
@section('master')

<h1 class="text-center mb-0">.</h1>
<p class="text-center mb-4">.</p>


<section class="photo-gallery mt-5">
  <h1 class="text-center mb-4">Galery SMK Muhammadiyah 3 Tegaldlimo</h1>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
      @foreach ($data as $item => $row)
      <div class="col">
        <a class="gallery-item" href="{{ asset('storage/'.$row->foto_prestasi) }}">
          <div class="img-container">
            <img src="{{ asset('storage/'.$row->foto_prestasi) }}" class="img-fluid" alt="Lorem ipsum dolor sit amet">
          </div>
        </a>
      </div>
      @endforeach
      
    </div>
  </div>
</section>

<style>
  .img-container {
    width: 100%;
    max-width: 400px;
    position: relative;
    padding-bottom: 75%; /* 4:3 ratio (3/4 * 100) */
    height: 0;
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

<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="lightbox-content">
          <!-- JS content here -->
        </div>
      </div>
    </div>
  </div>
</div>

@endsection