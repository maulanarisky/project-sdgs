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
                                <th>Nama Indikator TPB</th>
                                <th>Sumber Data</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subkegiatans as $sub)
                                
                                @if ($sub->user_id != null )
                                    @if ($sub->user_id == Auth::user()->id )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub->program }}</td>
                                        <td>{{ $sub->kegiatan }}</td>
                                        <td>{{ $sub->kode_sub_kegiatan }}. {{ $sub->name_sub_kegiatan }}</td>
                                        <td>{{ $sub->indikator_sub}}</td>
                                        <td>{{ $sub->satuan }}</td>
                                        @if ($sub->indikator_id == "")
                                            <td></td>
                                        @else
                                            <td>{{ $sub->indikator->kode_indikator}}.{{ $sub->indikator->deskripsi}}</td>
                                        @endif
                                        {{-- karena default user_id di indikator ke superadmin --}}
                                        @if ($sub->user_id == "")
                                            <td></td>
                                        @else
                                            <td>{{ $sub->user->name }}</td>
                                        @endif

                                        @if ($sub->user_id != null )
                                            @if ($sub->user_id == Auth::user()->id)
                                            <td align="center" style="width: 8rem;">
                                            <a href="/menu/subkegiatan/{{ $sub->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                            @else  
                                            <td align="center" style="width: 8rem;"> </td>
                                            @endif
                                        @elseif ($sub->user_id == null && $sub->indikator_id == null)
                                        <td align="center" style="width: 8rem;"> <a href="/menu/subkegiatan/{{ $sub->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                    </tr>
                                        @endif
                                    @endif
                                @else
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub->program }}</td>
                                        <td>{{ $sub->kegiatan }}</td>
                                        <td>{{ $sub->kode_sub_kegiatan }}. {{ $sub->name_sub_kegiatan }}</td>
                                        <td>{{ $sub->indikator_sub}}</td>
                                        <td>{{ $sub->satuan }}</td>
                                        @if ($sub->indikator_id == "")
                                            <td></td>
                                        @else
                                            <td>{{ $sub->indikator->kode_indikator}}.{{ $sub->indikator->deskripsi}}</td>
                                        @endif
                                        {{-- karena default user_id di indikator ke superadmin --}}
                                        @if ($sub->user_id == "")
                                            <td></td>
                                        @else
                                            <td>{{ $sub->user->name }}</td>
                                        @endif
                                         @if ($sub->user_id != null )
                                            @if ($sub->user_id == Auth::user()->id)
                                            <td align="center" style="width: 8rem;">
                                            <a href="/menu/subkegiatan/{{ $sub->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                            @else  
                                            <td align="center" style="width: 8rem;"> </td>
                                            @endif
                                        @elseif ($sub->user_id == null && $sub->indikator_id == null)
                                        <td align="center" style="width: 8rem;"> <a href="/menu/subkegiatan/{{ $sub->id }}/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                        @endif
                                    </tr>
                                @endif
                                
                                </tr>
                              
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection