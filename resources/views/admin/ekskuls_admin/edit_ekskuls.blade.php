@extends('admin.master')
@section('admin')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data ekskuls</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{route('update.ekskuls_admin',$ekskuls->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="judul_ekskuls">judul ekskuls</label>
                        <input type="text" class="form-control form-control-lg  @error('judul_ekskuls') is-invalid @enderror" id="judul_ekskuls" placeholder="judul ekskuls" name="judul_ekskuls" value="{{$ekskuls->judul_ekskuls}}">
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
                        <label for="deskripsi_ekskuls">deskripsi ekskuls</label>
                        <input type="text" class="form-control form-control-lg  @error('deskripsi_ekskuls') is-invalid @enderror" id="tempat" placeholder="deskripsi ekskuls" name="deskripsi_ekskuls" value="{{$ekskuls->deskripsi_ekskuls}}">
                        @error('deskripsi_ekskuls')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                    <div hidden class="col-sm-6 mb-3 mb-sm-0">
                        <label for="waktu">Waktu</label>
                        <input class="form-control form-control-lg" type="date" id="waktu" name="created_at">
                        @error('waktu')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                </div>

                <button class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa fa-pen"></i>
                    </span>
                    <span class="text">edit ekskuls</span>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection