@extends('Menu.layouts.main')
@section('container')
  
  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Rencana Tindak Lanjut</h1>

    <div class="card shadow mb-4">

      {{-- superamin gak bisa nambah data --}}
      <div class="card-header py-3">
        <div class="row">
          <div class="col-9">
            @if (Auth::user()->role_id == 1) 
              <a href="#" class="btn btn-success">Excel</a>
              <a href="#" class="btn btn-danger">PDF</a>
            @else
              <a href="/menu/rtl/create" class="btn btn-success" >Tambah Data</a>
            @endif
          </div>
        </div>
      </div>

      <div class="card-body">

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="table-responsive">
          <table class="table table-bordered"id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th rowspan="2" style="vertical-align: middle"> Tujuan SDGs </th>
                <th colspan="2"> Identifikasi Masalah </th>
                <th rowspan="2" style="vertical-align: middle"> Rencana Tindak Lanjut </th>
                <th rowspan="2" style="vertical-align: middle"> Institusi Pelaksana Pemerintah <br> / Non Pemerintah </th>
                @if (Auth::user()->role_id != 1)
                  <th rowspan="2" style="vertical-align: middle">Aksi</th>  
                @endif
              </tr>
              <tr class="text-center">
                <th>Kategori</th>
                <th>Deskripsi</th>
              </tr>
            </thead>
            <tbody id="myTable">
              @foreach ($rencana_tindak_lanjuts as $rtl)
                @if ($rtl->user->id == Auth::user()->id)
                  <tr>
                    <td>{{ $rtl->tujuan->name }}</td>
                    <td>{{ $rtl->kategori }}</td>
                    <td>{{ $rtl->deskripsi }}</td>
                    <td>{{ $rtl->rtk }}</td>
                    <td>{{ $rtl->pelaksana }}</td>

                    <td align="center" style="width: 8rem">
                      <a href="/menu/rtl/{{ $rtl->id }}/edit" class="btn btn-warning p-2"><i class="fas fa-fw fa-pen-square"></i></a>
                      
                      <form action="/menu/rtl/{{ $rtl->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger p-2" onclick="return confirm('Apakah Anda Yakin menghapus Kategori Masalah : {{ $rtl->kategori }} ?')"> 
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>

                {{-- jika yg login admin --}}
                @elseif( Auth::user()->role_id == 1 )
                  <tr>
                    <td>{{ $rtl->tujuan->name }}</td>
                    <td>{{ $rtl->kategori }}</td>
                    <td>{{ $rtl->deskripsi }}</td>
                    <td>{{ $rtl->rtk }}</td>
                    <td>{{ $rtl->pelaksana }}</td>
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