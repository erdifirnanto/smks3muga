@extends('admin.master')
@section('admin')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Prestasi</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{route('store.prestasi_admin')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="jenis_prestasi">Jenis Prestasi</label>
                        <input type="text" class="form-control form-control-lg  @error('jenis_prestasi') is-invalid @enderror"
                            id="jenis_prestasi" placeholder="Jenis Prestasi" name="jenis_prestasi">
                        @error('jenis_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>

                    <div class="col-sm-6">
                        <label for="judul_prestasi">Judul Prestasi</label>
                        <input type="text"
                            class="form-control form-control-lg  @error('judul_prestasi') is-invalid @enderror"
                            id="tempat" placeholder="Judul Prestasi" name="judul_prestasi">
                        @error('judul_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="foto_prestasi">Foto</label>
                        <input class="form-control form-control-lg" accept="image/*" type="file" id="foto_prestasi" name="foto_prestasi">
                        @error('foto_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                </div>

                <button class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Prestasi</span>
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
        judul_prestasi: {
          required: true,
        },
        jenis_prestasi: {
          required: true,
        },
        foto_prestasi: {
          required: true,
        },
      },
      messages: {
        judul_prestasi: {
          required: "Judul prestasi tidak boleh kosong",
        },
        jenis_prestasi: {
          required: "jenis prestasi tidak boleh kosong",
        },
        foto_prestasi: {
          required: "foto prestasi harus ditambahkan",
        },
      },
    });
  </script>
@endpush