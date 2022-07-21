@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Indikator TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/menu/indikator/create" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>Kode Tujuan</th>
                                <th>Kode Target</th>
                                <th>Kode Indikator</th>
                                <th>Nama Indikator</th>
                                <th>Sumber Data</th>
                                <th>Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($indikators as $indikator)
                                <tr>
                                    <td>{{ $indikator->target->tujuan->kode_tujuan }}</td>
                                    <td>{{ $indikator->target->kode_target }}</td>
                                    <td>{{ $indikator->kode_indikator }}</td>
                                    <td>{{ $indikator->deskripsi }}</td>
                                    {{-- karena default user_id di indikator ke superadmin --}}
                                    @if ($indikator->user_id == 1)
                                        <td></td>
                                    @else
                                        <td>{{ $indikator->user->name }}</td>
                                    @endif

                                    <td>{{ $indikator->satuan }}</td>

                                    <td align="center" style="width: 8rem;">
                                        <a href="/menu/indikator/{{ $indikator->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                        <form action="/menu/indikator/{{ $indikator->id }}" method="post" class="d-inline">
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