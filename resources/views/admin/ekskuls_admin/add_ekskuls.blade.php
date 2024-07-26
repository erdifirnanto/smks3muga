@extends('admin.master')
@section('admin')
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
    <div class="card-body">
      <form class="user" method="POST" action="{{route('store.ekskuls_admin')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="judul_ekskuls">Judul Ekstrakurikuler</label>
            <input type="text" class="form-control form-control-lg  @error('judul_ekskuls') is-invalid @enderror" id="judul_ekskuls" placeholder="Nama" name="judul_ekskuls">
            @error('judul_ekskuls')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <br>
          </div>

          <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="foto_ekskuls">Foto</label>
            <input class="form-control form-control-lg" accept="image/*" type="file" id="foto_ekskuls" name="foto_ekskuls">
            @error('foto_ekskuls')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <br>
          </div>

          <div class="col-sm-6">
            <label for="deskripsi_ekskuls">Deskripsi Ekstrakurikuler</label>
            <textarea type="text" class="form-control form-control-lg  @error('deskripsi_ekskuls') is-invalid @enderror" id="deskripsi_ekskuls" placeholder="Deskripsi" name="deskripsi_ekskuls"></textarea>
            @error('deskripsi_ekskuls')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>


        </div>

        <button class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Data</span>
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
  $("#validate").validate({
    rules: {
      judul_ekskuls: {
        required: true,
      },
      deskripsi_ekskuls: {
        required: true,
      },
      foto_ekskuls: {
        required: true,
      },
    },
    messages: {
      judul_ekskuls: {
        required: "Judul ekskuls tidak boleh kosong",
      },
      deskripsi_ekskuls: {
        required: "Deskripsi ekskuls tidak boleh kosong",
      },
      foto_ekskuls: {
        required: "Foto ekskuls harus ditambahkan",
      },
    },
  });
</script>
@endpush