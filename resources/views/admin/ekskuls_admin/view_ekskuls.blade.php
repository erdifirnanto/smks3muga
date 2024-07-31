@extends('admin.master')
@section('admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ekstrakurikuler</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Data Foto</h6>
                </div>
                <div class="co"><a href="{{ route('add.ekskuls_admin') }}" class="btn btn-primary"> Tambah Data</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Judul Kegiatan</th>
                            <th>Deskripsi Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item => $row)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center"><img src="{{ Storage::url('' . $row->foto_ekskuls) }}" width="70px" alt=""></td>
                            <td class="text-center">{{ $row->judul_ekskuls }}</td>
                            <td class=" text-center">{{ $row->deskripsi_ekskuls }}</td>
                            <td class="text-center"><a href="{{route('edit.ekskuls_admin',$row->id)}}" class="btn btn-warning"> Edit </a>
                                <a href="{{route('delete.ekskuls_admin',$row->id)}}" id="delete" data-confirm-delete="true"><button type="button" class="btn btn-danger delete">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection