@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">
    
    <h1 class="h3 mb-3 text-gray-800 text-center">Realisasi Program, Kegiatan dan Anggaran Program Pemerintah Daerah</h1>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <select class="float-right btn btn-success dropdown-toggle" name="tahun_id" onchange="location = this.value;">
          <option value="">-- Pilih Tahun --</option>
          @foreach ($tahuns as $tahun)
          <option value="/menu/pemda/{{ $tahun->id }}">{{ $tahun->name }}</option>
          @endforeach
        </select>  

        <a class="mr-3 float-right btn btn-warning">{{ $tahunSinggle->name }}</a>

        @if (Auth::user()->role_id == 1) 
          <a href="/form2b-export/{{  $tahunSinggle->id }}" class="btn btn-success">Excel</a>
          {{-- <a href="#" class="btn btn-danger">PDF</a> --}}
        {{-- @else
          <a href="/menu/pemda/create" class="btn btn-success">Tambah Data</a> --}}
        @endif
      </div>

    <div class="card-body">

      <x-auth-session-status class="mb-4" :status="session('status')" />

      <div class="table-responsive">
       @include('Menu.ProgramPemerintahDaerah.table')
      </div>
    </div>
  </div>
@endsection