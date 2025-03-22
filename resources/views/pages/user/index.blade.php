@extends('layouts.app')


@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    {{-- tabel data pegawai --}}

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-responsive table-bordered table-hovered">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>NIPY</th>
                                <th>NAMA</th>
                                <th>JK</th>
                                <th>TEMPAT BERTUGAS</th>
                                <th>JABATAN</th>
                                <th>JENIS PEGAWAI</th>
                                <th>TANGGAL MASUK</th>
                                <th>LAMA BEKERJA</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection