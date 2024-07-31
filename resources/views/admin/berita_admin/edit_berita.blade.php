@extends('admin.master')
@section('admin')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Berita</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="{{route('update.berita_admin',$berita->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text" class="form-control form-control-lg  @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="Judul berita" value="{{$berita->judul_berita}}" name="judul_berita">
                        @error('judul_berita')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                    <div hidden class="col-sm-6">
                        <label for="pembuat">Pembuat</label>
                        <input type="text" class="form-control form-control-lg  @error('pembuat') is-invalid @enderror" id="tempat" placeholder="Pembuat" name="pembuat" value="{{$berita->pembuat}}">
                        @error('pembuat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Foto">Foto</label>
                        <input class="form-control form-control-lg" accept="image/*" name="foto_berita" type="file" id="Foto">
                        @error('Foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="berota">Berita</label>
                        <textarea class="form-control  @error('berita') is-invalid @enderror" id="exampleFormControlTextarea1" name="berita" rows="3">{{$berita->berita}}</textarea>
                    </div>
                </div>

                <button class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa fa-pen"></i>
                    </span>
                    <span class="text">Edit berita</span>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection