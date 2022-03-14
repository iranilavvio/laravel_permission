@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Data</strong>Gaji</h1>
    <div class="card">
        <div class="card-body">
            @can('print gaji')
                <a href="" class="btn btn-success"><i class="me-1" data-feather="plus-circle"></i>Cetak</a>
            @endcan
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Gaji</th>
                            @can('edit gaji')
                                <th>Aksi</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Andi</td>
                            <td>Head Finance</td>
                            <td>Rp. 3.500.000</td>
                            <td>
                                @can('edit gaji')
                                    <a href="" class="btn btn-sm btn-primary"><i data-feather="edit"></i>Edit</a>
                                @endcan
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
