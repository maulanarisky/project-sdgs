@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800 text-center">Program Pelaku Usaha</h1>

    <div class="card shadow mb-4">

      <div class="card-header py-3">
        <div class="row">
          <div class="col-9">
            @if (Auth::user()->role_id == 1) 
              <a href="/form4-export" class="btn btn-success">Excel</a>
              {{-- <a href="#" class="btn btn-danger">PDF</a> --}}
            @else
              <a href="/menu/umkm/create" class="btn btn-success"> Tambah Data </a>  
            @endif
          </div>
        </div>
      </div>     
      
      <div class="card-body">

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="table-responsive">
          @include('Menu.ProgramPelakuUsaha.table')
        </div>
      </div>
    </div>
  </div>
@endsection