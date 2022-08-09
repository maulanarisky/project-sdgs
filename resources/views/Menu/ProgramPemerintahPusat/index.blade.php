@extends('Menu.layouts.main')
@section('container')

 <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800 text-center">Formulir Realisasi Program, Kegiatan dan Anggaran Program Pemerintah Pusat</h1>
           
            <!-- DataTales Example -->
             <div class="card shadow mb-4">
             <div class="card-header py-3">

                  <select class="float-right btn btn-success dropdown-toggle" name="tahun_id" onchange="location = this.value;">
                    <option value="">-- Pilih Tahun --</option>
                    @foreach ($tahuns as $tahun)
                    <option value="/menu/pusat/{{ $tahun->id }}">{{ $tahun->name }}</option>
                    @endforeach
                  </select>  
                  <a class="mr-3 float-right btn btn-warning">{{ $tahunSinggle->name }}</a>

                  <a href="/form2a-export/{{  $tahunSinggle->id }}" class="btn btn-success"><i class=" fas fa-fw fa-file-excel" ></i><span>Excel</span></a>
                  @if (Auth::user()->role_id == 3) 
                  <a href="/menu/pusat/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
                  @endif
                </div>
              <div class="card-body">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <div class="table-responsive">
                   @include('Menu.ProgramPemerintahPusat.table')
                </div>
              </div>
            </div>
          </div>

@endsection