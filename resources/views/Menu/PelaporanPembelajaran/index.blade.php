@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800 text-center">Pelaporan Pembelajaran</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/form6-export" class="btn btn-success"><i class=" fas fa-fw fa-file-excel" ></i><span>Excel</span></a>
                    @if (Auth::user()->role_id != 1 AND Auth::user()->role_id != 7)
                    <a href="/menu/pp/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
                    @endif
                </div>

            <div class="card-body">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="table-responsive">
                    @include('Menu.PelaporanPembelajaran.table')
                </div>
            </div>
        </div>

    </div>
@endsection