@extends('admin.master')
@section('admin')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Vidio</h1>
       

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Vidio</h6>
                    </div>
                    <div class="co"><a href="{{ route('add.vidio_admin') }}" class="btn btn-primary"> Tambah Data</a>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>
                                <th>Judul Vidio</th>
                                <th>Link Vidio</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item => $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img src="{{asset('storage/'.$row->thumbnail)}} " width="70px" alt=""></td>
                                    <td>{{$row->judul_vidio}}</td>
                                    <td>{{$row->link_vidio}}</td>
                                    <td>
                                        <a href="{{route('edit.vidio_admin',$row->id)}}" class="btn btn-warning"> Edit </a>
                                        <a href="{{route('delete.vidio_admin',$row->id)}}" id="delete"><button type="button"
                                                class="btn btn-danger delete">Hapus</button></a>
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
