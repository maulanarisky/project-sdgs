@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800 text-center">Kegiatan</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/menu/kegiatan/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
            </div>

            <div class="card-body">
                
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Program</th>
                                <th>Nama Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatans as $kegiatan)
                                @if ($kegiatan->user->id == Auth::user()->id)
                                    <tr>
                                        <td>{{ $kegiatan->program->name_program }}</td>
                                        <td>{{ $kegiatan->name_kegiatan }}</td>
                                        <td align="center">
                                            <a href="/menu/kegiatan/{{ $kegiatan->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                            <form action="/menu/kegiatan/{{ $kegiatan->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapur tujuan : {{ $kegiatan->name_kegiatan }} ?')">
                                                        <i class="fas fa-fw fa-trash"></i>
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection