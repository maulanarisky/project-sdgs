@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800 text-center">Laporan Pencapaian TPB/SDGs</h1>

        <div class="card shadow mb-4">
            @if (Auth::user()->role_id != 1)
                <div class="card-header py-3">
                    <a href="/menu/lp/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
                </div>
            @endif

            <div class="card-body">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Tujuan</th>
                                <th>Nama File</th>
                                <th>File</th>
                                @if (Auth::user()->role_id != 1)
                                <th>Aksi</th>
                                @elseif (Auth::user()->role_id == 1)
                                <th>Sumber Data</th>
                                @endif
                        </thead>
                        <tbody>
                            @foreach ($laporan_pencapaians as $lp)
                                @if ($lp->user->id == Auth::user()->id)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @if ($lp->tahun_id == null)
                                            <td></td>
                                        @else
                                            <td>{{ $lp->tahun->name }}</td>
                                        @endif
                                        @if ($lp->tujuan_id == null)
                                            <td></td>
                                        @else
                                        <td>{{ $lp->tujuan->name }}</td>
                                        @endif
                                        <td>{{ $lp->name_file }}</td>
                                        <td align="center" style="width: 8rem;"> <a href="/menu/lp/{{ $lp->id }}" class="btn btn-info"><i class="fas fa-fw fa-download"></i></a></td>
                                        <td align="center" style="width: 8rem;">
                                            <a href="/menu/lp/{{ $lp->id }}/edit" class="btn btn-warning">
                                                <i class="fas fa-fw fa-pen-square"></i>
                                            </a>
                                            <form action="/menu/lp/{{ $lp->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class=" btn btn-danger " onclick="return confirm('Apakah Yaking Menghapus File : {{ $lp->name_file }}:')"><i class="fas fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @elseif(Auth::user()->role_id == 1)
                                    <tr>
                                        <td align="center">{{ $loop->iteration }}</td>
                                        @if ($lp->tahun_id == null)
                                            <td></td>
                                        @else
                                            <td>{{ $lp->tahun->name }}</td>
                                        @endif
                                        @if ($lp->tujuan_id == null)
                                            <td></td>
                                        @else
                                        <td>{{ $lp->tujuan->name }}</td>
                                        @endif
                                        <td>{{ $lp->name_file }}</td>
                                        <td align="center" style="width: 8rem;"> 
                                            <a href="/menu/lp/{{ $lp->id }}" class="btn btn-info">
                                                <i class="fas fa-fw fa-download"></i>
                                            </a>
                                        </td>
                                        <td>{{ $lp->user->name }}</td>
                                    </tr>
                                @endif 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script> --}}

@endsection