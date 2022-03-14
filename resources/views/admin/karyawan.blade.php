@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Data</strong>Karyawan</h1>
    <div class="card">
        <div class="card-body">
            @can('create karyawan')
                <a href="" class="btn btn-primary"><i class="me-1" data-feather="plus-circle"></i>Tambah</a>
            @endcan

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            @can('edit karyawan|delete karyawan')
                                <th>Aksi</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Andi</td>
                            <td>28 Desember 1995</td>
                            <td>Laki-laki</td>
                            <td>Banjarmasin</td>
                            <td>
                                @can('edit karyawan')
                                    <a href="" class="btn btn-sm btn-primary"><i data-feather="edit"></i>Edit</a>
                                @endcan

                                @can('delete karyawan')
                                    <a href="" class="btn btn-sm btn-danger"><i data-feather="trash"></i>Delete</a>
                                @endcan
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
