@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800 text-center">Pelaporan Pembelajaran</h1>

        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Tambah Data</span>
            </div>
            <div class="card-body">
                      
                <form method="post" action="/menu/lp" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_file">Nama File</label>
                                <input type="hidden" name="user_id"class="form-control @error('user_id') is-invalid @enderror" id="user_id" value="{{ Auth::user()->id }}"/>
                                <input type="text" name="name_file"class="form-control @error('name_file') is-invalid @enderror" id="name_file" autofocus placeholder=" ex: Laporan Pencapaian TPB {{ Auth::user()->name }}"/>
                                <x-validation-message name="nama_file" />
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file" aria-describedby="file"/>
                            <x-validation-message name="file" />
                        </div>
                    </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success px-5">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection