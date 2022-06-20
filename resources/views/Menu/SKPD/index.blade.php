@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tentukan SKPD pelaksana untuk setiap Indikator TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>Kode Tujuan</th>
                                <th>Kode Target</th>
                                <th>Kode Indikator</th>
                                <th>Nama Indikator</th>
                                <th>Instansi Pelaksana</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($indikators as $indikator)
                                <tr>
                                    <td>{{ $indikator->tujuan->kode_tujuan }}</td>
                                    <td>{{ $indikator->target->kode_target }}</td>
                                    <td>{{ $indikator->kode_indikator }}</td>
                                    <td>{{ $indikator->deskripsi }}</td>
                                    <td>{{ $indikator->sumber_data }}</td>
                                    <td align="center" style="width: 8rem;">
                                        <a href="/menu/skpd/{{ $indikator->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                        <form action="/menu/skpd/{{ $indikator->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapus indikator : {{ $indikator->name }} ?')">
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