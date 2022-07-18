@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pelaporan Pembelajaran</h1>
        <p class="mb-4">Ubah Data</p>

        <div class="card shadow mb-4 border-left-success" >
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                      
                        <form method="post" action="/menu/pp/{{ $pp->id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                 <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                <label for="deskripsi">Deskripsi File</label>
                                <input type="text" name="deskripsi"class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" autofocus placeholder=" ex: Deskripsi File {{ Auth::user()->name }}" value="{{ $pp->deskripsi }}"/>
                                <x-validation-message name="deskripsi" />
                            </div>
                        </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_file">Nama File</label>
                                        <input type="text" name="name_file"class="form-control @error('name_file') is-invalid @enderror" id="name_file" aria-describedby="name_file" value="{{ $pp->name_file }}"/>
                                        <x-validation-message name="nama_file" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            {{-- <input type="hidden" name="oldFile" value="{{ $pp->file }}"> --}}
                                            <label for="file">File</label>
                                            <input type="file" name="file" id="file"value="{{asset('storage/' . $pp->file) }}" class="form-control @error('file') is-invalid @enderror"  aria-describedby=""/>
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