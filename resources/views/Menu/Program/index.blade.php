@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800 text-center">Program</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/menu/program/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
            </div>

            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Program</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                        
                            @foreach ($programs as $program)
                                @if ($program->user->id == Auth::user()->id)
                                    <tr>
                                        <td>{{ $program->name_program }}</td>
                                        <td align="center">
                                            <a href="/menu/program/{{ $program->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                            <form action="/menu/program/{{ $program->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapus program : {{ $program->name_program }} ?')">
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