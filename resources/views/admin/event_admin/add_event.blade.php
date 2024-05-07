@extends('admin.master')
@section('admin')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Event</h6>
        </div>
        <div class="card-body">
            <form id="validate" class="user" method="POST" action="{{route('store.event_admin')}}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="judul_event">Judul Event</label>
                        <input type="text" class="form-control form-control-lg  @error('judul_event') is-invalid @enderror"
                            id="judul_event" placeholder="Judul Event" name="judul_event">
                        @error('judul_event')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <label for="pembuat">Pembuat</label>
                        <input type="text"
                            class="form-control form-control-lg  @error('pembuat') is-invalid @enderror"
                            id="tempat" placeholder="Pembuat" name="pembuat">
                        @error('pembuat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Foto">Foto</label>
                        <input class="form-control form-control-lg" accept="image/*" name="foto_event" type="file"  id="Foto">
                        @error('Foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>

                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="berota">Berita</label>
                        <textarea class="form-control  @error('berita') is-invalid @enderror" id="exampleFormControlTextarea1" name="berita" rows="3"></textarea>
                    </div>



                    
                </div>

                <button class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Event</span>
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
        judul_event: {
          required: true,
        },
        pembuat: {
          required: true,
        },
        foto_event: {
          required: true,
        },
        berita: {
          required: true,
        },
       
      },
      messages: {
        judul_event: {
          required: "Judul event tidak boleh kosong",
        },
        pembuat: {
   
          required: "pembuat tidak boleh kosong",
          
        },
        foto_event: {
          required: "foto event harus ditambahkan",
        },
        berita: {
          required: "verita tidak boleh kosong",
        },
      },
    });
  </script>
@endpush