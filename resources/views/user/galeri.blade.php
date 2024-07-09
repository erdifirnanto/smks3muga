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
          <img src="{{ asset('storage/'.$row->foto_prestasi) }}" class="img-fluid" alt="Lorem ipsum dolor sit amet" style="max-width: 400px;">
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

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