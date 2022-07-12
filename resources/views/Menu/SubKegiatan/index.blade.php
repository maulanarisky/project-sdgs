@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Indikator Provinsi TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <a href="/menu/subkegiatan/create" class="btn btn-success">Tambah Data</a> --}}
            </div>
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Kode Program</th>
                                <th>Kode Kegiatan</th>
                                <th>Kode Sub-Kegiatan</th>
                                <th>Nama Sub-Kegiatan</th>
                                <th>Nama Indikator</th>
                                <th>Satuan</th>
                                <th>Sumber Data</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subkegiatans as $sub)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sub->program }}</td>
                                    <td>{{ $sub->kegiatan }}</td>
                                    <td>{{ $sub->kode_sub_kegiatan }}</td>
                                    <td>{{ $sub->name_sub_kegiatan }}</td>
                                    <td>{{ $sub->indikator}}</td>
                                    <td>{{ $sub->satuan }}</td>
                                    {{-- karena default user_id di indikator ke superadmin --}}
                                    @if ($sub->user_id == 1)
                                        <td></td>
                                    @else
                                        <td>{{ $sub->user->name }}</td>
                                    @endif


                                    <td align="center" style="width: 8rem;">
                                        <a href="/menu/subkegiatan/{{ $sub->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                        <form action="/menu/subkegiatan/{{ $sub->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapus sub Kegiatan : {{ $sub->name_sub_kegiatan }} ?')">
                                                <i class="fas fa-fw fa-trash"></i>
                                            </button>
                                        </form>
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