@extends('Menu.layouts.main')
@section('container')

   <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tujuan TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/menu/tujuan/create" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>Kode Tujuan</th>
                                <th>Nama Tujuan</th>
                                <th>Deskripsi tujuan</th>
                                <th>Gambar</th>
                                <th>Sumber Data</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tujuans as $tujuan)
                                <tr align="center">
                                    <td width="50px">{{ $tujuan->kode_tujuan }}</td>
                                    <td width="50px" style="text-transform: uppercase">{{ $tujuan->name }}</td>
                                    <td width="450px" align="left">{{ $tujuan->deskripsi }}</td>
                                    <td><img src="{{ asset('storage/' . $tujuan->img) }}" height="50px" alt=""></td>
                                    @if ($tujuan->user_id == null)
                                        <td></td>
                                    @else
                                        <td>{{ $tujuan->user->name }}</td>
                                    @endif
                                    <td>
                                        <a href="/menu/tujuan/{{ $tujuan->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                        <form action="/menu/tujuan/{{ $tujuan->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapur tujuan : {{ $tujuan->name }} ?')">
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