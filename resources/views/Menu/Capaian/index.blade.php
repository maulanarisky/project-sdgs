@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800 text-center">Formulir Evaluasi Kinerja Pencapaian Sasaran TPB/SDGs</h1>
        <br>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- hanya tampil di super admin --}}
                @if (Auth::user()->role_id == 1) 
                    <a href="/form1-export/{{  $tahunSinggle->id }}" class="btn btn-success">Excel</a>
                    <a href="#" class="btn btn-danger">PDF</a>
                @endif
                                
                <select class="float-right btn btn-success dropdown-toggle" name="tahun_id" onchange="location = this.value;">
                    <option value="">-- Pilih Tahun --</option>
                    @foreach ($tahuns as $tahun)
                    <option value="/menu/capaian/{{ $tahun->id }}">{{ $tahun->name }}</option>
                    @endforeach
                </select>                
                <a class="mr-3 float-right btn btn-warning">{{ $tahunSinggle->name }}</a>
            </div>

            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    @include('menu.Capaian.table')
                </div>
            </div>
        </div>
    </div>


@endsection