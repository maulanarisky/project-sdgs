@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Indikator TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                <a href="/menu/indikator/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
                <div class="col-md text-right">
                 <a href="/menu/indikator/active/{{ Auth::user()->role_id }}" class="btn btn-primary">Aktifkan Form 1</a>
                 <a href="/menu/indikator/inactive/{{ Auth::user()->role_id }}" class="btn btn-danger">NonAktifkan Form 1</a>
            </div>
            </div>
            </div>
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th style="vertical-align: middle">Kode Tujuan</th>
                                <th style="vertical-align: middle">Kode Target</th>
                                <th style="vertical-align: middle">Kode Indikator</th>
                                <th style="vertical-align: middle">Nama Indikator</th>
                                <th style="vertical-align: middle">Sumber Data</th>
                                <th style="vertical-align: middle">Satuan</th>
                                <th style="vertical-align: middle">Status Form 1</th>
                                <th style="vertical-align: middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($indikators as $indikator)
                                <tr>
                                    <td style="vertical-align: middle">{{ $indikator->target->tujuan->kode_tujuan }}</td>
                                    <td style="vertical-align: middle">{{ $indikator->target->kode_target }}</td>
                                    <td style="vertical-align: middle">{{ $indikator->kode_indikator }}</td>
                                    <td style="vertical-align: middle">{{ $indikator->deskripsi }}</td>
                                    {{-- karena default user_id di indikator ke superadmin --}}
                                    @if ($indikator->user_id == 1)
                                        <td></td>
                                    @else
                                        <td style="vertical-align: middle">{{ $indikator->user->name }}</td>
                                    @endif

                                    <td>{{ $indikator->satuan }}</td>
                                    <td>{{ $indikator->status }}</td>

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