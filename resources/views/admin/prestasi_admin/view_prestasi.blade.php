@extends('admin.master')
@section('admin')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Prestasi</h1>
       

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Prestasi</h6>
                    </div>
                    <div class="co"><a href="{{ route('add.prestasi_admin') }}" class="btn btn-primary"> Tambah Data</a>
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
                                <th>Jenis Prestasi</th>
                                <th>Judul Prestasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item => $row)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center"><img src="{{asset('storage/'.$row->foto_prestasi)}}"  width="70px" alt=""></td>
                                    <td class="text-center">{{ $row->jenis_prestasi }}</td>
                                    <td class="text-center">{{ $row->judul_prestasi }}</td>
                                    <td class="text-center"><a href="{{route('edit.prestasi_admin',$row->id)}}" class="btn btn-warning"> Edit </a>
                                        <a href="{{route('delete.prestasi_admin',$row->id)}}" id="delete" data-confirm-delete="true"><button type="button"
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
