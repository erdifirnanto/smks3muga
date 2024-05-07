@extends('admin.master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pendaftaran</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Pendaftaran</h6>
                    </div>
                    <div class="co">
                        <div class="d-flex">
                            <div style="margin-right: 20px">
                                <a href="{{ route('download') }}"
                                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                            </div>
                            <div>
                                <a href="{{ route('reset') }}"
                                    class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" id="delete"><i
                                        class="fa-solid fa-circle-exclamation fa-sm text-white-50"></i> Reset
                                    Pendaftaran</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item => $row)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $row->nama }}</td>
                                        <td class="text-center">{{ $row->email }}</td>
                                        <td class="text-center">{{ $row->nohp }}</td>
                                        <td class="text-center">{{ $row->jenis_kelamin }}</td>
                                        <td class="text-center row">
                                            <a href="{{ route('show_pendaftaran', $row->id) }}"
                                                class="btn btn-success col">Detail Siswa</a>
                                            <a id="delete" href="{{ route('delete.pendaftaran', $row->id) }}"
                                                class="btn btn-danger  col">Hapus Siswa</a>
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
