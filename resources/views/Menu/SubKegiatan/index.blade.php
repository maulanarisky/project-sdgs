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
                                <th>Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subkegiatans as $sub)
                                
                                {{-- @if ($sub->user_id != null )
                                    @if ($sub->user_id == Auth::user()->id ) --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub->program }}</td>
                                        <td>{{ $sub->kegiatan }}</td>
                                        <td>{{ $sub->kode_sub_kegiatan }}. {{ $sub->name_sub_kegiatan }}</td>
                                        <td>{{ $sub->indikator_sub}}</td>
                                        <td>{{ $sub->satuan }}</td>
                                    </tr>
                                    {{-- @endif
                                @else --}}
                                   
                              
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection