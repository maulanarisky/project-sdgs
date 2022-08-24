@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Laporan Pencapaian</h1>
        <p class="mb-4">Ubah Data</p>

        <div class="card shadow mb-4 border-left-success" >
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                      
                        <form method="post" action="/menu/lp/{{ $lp->id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tahun_id">Pilih Tahun</label>
                                            <select class="@error('tahun_id') is-invalid @enderror form-control" name="tahun_id" required>
                                                <option style="text-transform: uppercase" value="">Pilih Tahun</option>   
                                                @foreach ($tahuns as $tahun)
                                                    @if (old('tahun_id', $lp->tahun_id === $tahun->id))
                                                        <option value="{{ $tahun->id }}" selected>{{ $tahun->name }}</option> 
                                                    @else
                                                        <option style="text-transform: uppercase" value="{{ $tahun->id }}">{{ $tahun->name }}</option>   
                                                    @endif
                                                @endforeach
                                            </select>
                                            <x-validation-message name="tahun_id" />
                                        </div>
                                    </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_i       d">Pilih Tujuan</label>
                                        <select class="@error('tujuan_id') is-invalid @enderror form-control" name="tujuan_id" id="tujuan">
                                            <option style="text-transform: uppercase" value="">Pilih Tujuan</option>   
                                            @foreach ($tujuans as $tujuan)
                                            @if($tujuan->user_id == Auth::user()->id)
                                                @if (old('tujuan_id', $lp->tujuan_id === $tujuan->id))
                                                    <option value="{{ $tujuan->id }}" selected>{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option> 
                                                @else
                                                    <option style="text-transform: uppercase" value="{{ $tujuan->id }}">{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option>   
                                                @endif
                                            @endif
                                            @endforeach
                                        </select>
                                        <x-validation-message name="tujuan_id" />
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_file">Nama File</label>
                                        <input type="hidden" name="user_id"class="form-control @error('user_id') is-invalid @enderror" id="name_file" aria-describedby="name_file" value="{{ Auth::user()->id }}"/>
                                        <input type="text" name="name_file"class="form-control @error('name_file') is-invalid @enderror" id="name_file" aria-describedby="name_file" value="{{ $lp->name_file }}"/>
                                        <x-validation-message name="nama_file" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">File</label>
                                            <input type="hidden" name="oldFile" value="{{ $lp->file }}">
                                            <input type="file" name="file" id="file"value="{{asset('storage/' . $lp->file) }}" class="form-control @error('file') is-invalid @enderror"  aria-describedby=""/>
                                            <x-validation-message name="file" />
                                    </div>
                                </div>
                             </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <button type="submit" class="btn btn-success px-5">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                      </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection