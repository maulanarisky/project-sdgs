@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800 text-center">Pelaporan Pembelajaran</h1>

        <div class="card shadow mb-4">
            @if (Auth::user()->role_id != 1)
                <div class="card-header py-3">
                    <a href="/menu/pp/create" class="btn btn-success">Tambah Data</a>
                </div>
            @endif

            <div class="card-body">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelaporan_pembelajarans as $pp)
                                @if ($pp->user->id == Auth::user()->id)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pp->name_file }}</td>
                                        <td align="center" style="width: 8rem;"> <a href="/menu/pp/{{ $pp->id }}" class="btn btn-info"><i class="fas fa-fw fa-download"></i></a></td>
                                        
                                        <td align="center" style="width: 8rem;">
                                            <a href="/menu/pp/{{ $pp->id }}/edit" class="btn btn-warning">
                                                <i class="fas fa-fw fa-pen-square"></i>
                                            </a>
                                            <form action="/menu/pp/{{ $pp->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class=" btn btn-danger " onclick="return confirm('Apakah Yaking Menghapus File : {{ $pp->name_file }}:')"><i class="fas fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @elseif(Auth::user()->role_id == 1)
                                    <tr>
                                        <td align="center">{{ $loop->iteration }}</td>
                                        <td>{{ $pp->name_file }}</td>
                                        <td align="center" style="width: 8rem;"> 
                                            <a href="/menu/pp/{{ $pp->id }}" class="btn btn-info">
                                                <i class="fas fa-fw fa-download"></i>
                                            </a>
                                        </td>
                                        <td>{{ $pp->user->name }}</td>
                                    </tr>
                                @endif 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>

@endsection