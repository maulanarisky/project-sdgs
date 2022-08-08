@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Subkegiatan Provinsi TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <a href="/menu/subkegiatan/create" class="btn btn-success">Tambah Data</a> --}}
            </div>
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Kode Program</th>
                                <th>Kode Kegiatan</th>
                                <th>Kode & Nama Sub-Kegiatan</th>
                                <th>Nama Indikator Sub Kegiatan</th>
                                {{-- <th>Nama Indikator TPB</th> --}}
                                <th>Satuan</th>
                                {{-- <th>Sumber Data</th> --}}
                                {{-- <th>Pilih Subkegiatan</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kabkotas AS $kab)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kab->program_kabkota }}</td>
                                    <td>{{ $kab->kegiatan_kabkota }}</td>
                                    <td>{{ $kab->kode_subkegiatan_kabkota }}. {{ $kab->name_subkegiatan_kabkota }}</td>
                                    <td>{{ $kab->indikator_kabkota}}</td>
                                    <td>{{ $kab->satuan }}</td>
                                    {{-- <td align="center" style="width: 8rem;">
                                        <a href="/menu/kabkota/{{ $kab->id }}" class="btn btn-info"><i class="fas fa-fw fa-check"></i></a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection