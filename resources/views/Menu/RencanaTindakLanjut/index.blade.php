@extends('Menu.layouts.main')
@section('container')
  
  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Identifikasi Masalah & Rencana Tindak Lanjut </h1>

    <div class="card shadow mb-4">

      {{-- superamin gak bisa nambah data --}}
      <div class="card-header py-3">
        <div class="row">
          <div class="col-9">
            @if (Auth::user()->role_id == 1) 
              <a href="/form5-export" class="btn btn-success">Excel</a>
            @else
              <a href="/menu/rtl/create" class="btn btn-success" >Tambah Data</a>
            @endif
          </div>
        </div>
      </div>

      <div class="card-body">

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="table-responsive">
          @include('Menu.RencanaTindakLanjut.table')
        </div>
      </div>
    </div>
  </div>
          

@endsection