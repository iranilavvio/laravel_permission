@extends('layouts.admin')

@section('content')
    <h1 class="h3 mb-3"><strong>Data</strong>Absensi</h1>
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Hadir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Andi</td>
                            <td>28 Desember 2021</td>
                            <td>Ya</td>
                            <td>
                                @can('print absensi')
                                    <a href="" class="btn btn-sm btn-success"><i data-feather="print"></i>Cetak</a>
                                @endcan
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
