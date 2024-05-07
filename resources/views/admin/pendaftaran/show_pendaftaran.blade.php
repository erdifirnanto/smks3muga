@extends('admin.master')
@section('admin')
<div class="container-fluid">
    <div class="card">
      <div class="card-header">Data Calon Siswa</div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <a href="{{asset('storage/'.$data->foto_murid)}}" download="{{$data->nama}}.jpg">  
              <img style="width: 300px; " src="{{asset('storage/'.$data->foto_murid)}}" alt="">
            </a>
          </div>
          <div class="col">
            <div class="row" >
              <div class="col-3"><h5>Nama</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->nama}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Tempat Lahir</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->tempat_lahir}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Tanggal Lahir</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->tanggal_lahir}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Jenis Kelamin</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->jenis_kelamin}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Asal Sekolah</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->asal_sekolah}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Alamat Rumah</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->alamat_rumah}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Nama Ayah</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->nama_ayah}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Nama Ibu</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->nama_ibu}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Nama Wali</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->nama_wali}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>No HP</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->nohp}}</h5></div>
            </div>
            <div class="row" >
              <div class="col-3"><h5>Email</h5></div>
              <div class="col-1" ><h5>:</h5></div>
              <div class="col-8"><h5>{{$data->email}}</h5></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection