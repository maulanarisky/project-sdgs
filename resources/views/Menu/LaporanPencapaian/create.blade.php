@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800 text-center">Laporan Pencapaian</h1>

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
                            <label for="tahun_id">Pilih Tahun</label>
                            <select class="@error('tahun_id') is-invalid @enderror form-control" name="tahun_id" required>
                                <option style="text-transform: uppercase" value="">Pilih Tahun</option>   
                                @foreach ($tahuns as $tahun)
                                    <option style="text-transform: uppercase" value="{{ $tahun->id }}">{{ $tahun->name }}</option> 
                                @endforeach
                            </select>
                            <x-validation-message name="tahun_id" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tujuan_id">Pilih Tujuan</label>
                            <select class="@error('tujuan_id') is-invalid @enderror form-control" name="tujuan_id" id="tujuan" required>
                                <option style="text-transform: uppercase" value="">Pilih Tujuan</option>   
                                @foreach ($tujuans as $tujuan)
                                    @if ($tujuan->user_id == Auth::user()->id)
                                    <option style="text-transform: uppercase" value="{{ $tujuan->id }}">{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option>   
                                    @endif
                                @endforeach
                            </select>
                            <x-validation-message name="tujuan_id" />
                        </div>
                        </div>
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