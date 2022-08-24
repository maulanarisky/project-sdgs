@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800 text-center">Pelaporan Pembelajaran</h1>

        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Tambah Data</span>
            </div>
            <div class="card-body">
                      
                <form method="post" action="/menu/pp" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_id">Pilih Tujuan</label>
                                        <select class="@error('tujuan_id') is-invalid @enderror form-control" name="tujuan_id" id="tujuan">
                                            <option value="">Pilih Tujuan TPB/SDGs Terlebih Dahulu</option>   
                                            @foreach ($tujuans as $tujuan)
                                                <option style="text-transform: uppercase" value="{{ $tujuan->id }}">{{ $tujuan->id }}. {{ $tujuan->name }}</option>   
                                            @endforeach
                                        </select>
                                <x-validation-message name="tujuan_id" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_program">Nama Program</label>
                                <input type="text" name="name_program"class="form-control @error('name_program') is-invalid @enderror" id="name_program" value="{{ old('name_program') }}" autofocus placeholder=" ex: Program {{ Auth::user()->name }}"/>
                                <x-validation-message name="name_program" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi"class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" autofocus placeholder=" ex: Lokasi" value="{{ old('lokasi') }}"/>
                                <x-validation-message name="lokasi" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="date" name="waktu"class="form-control @error('waktu') is-invalid @enderror" id="waktu" autofocus placeholder=" ex: Program" value="{{ old('waktu') }}"/>
                                <x-validation-message name="waktu" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latar_belakang">Latar Belakang</label> 
                                <textarea name="latar_belakang" id="latar_belakang" class="form-control @error('latar_belakang') is-invalid @enderror" placeholder="Latar Belakang">{{ old('latar_belakang') }}</textarea>
                                <x-validation-message name="latar_belakang" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="proses_pelaksanaan">Proses Pelaksanaan</label>
                              <textarea name="proses_pelaksanaan" id="proses_pelaksanaan" class="form-control @error('proses_pelaksanaan') is-invalid @enderror" placeholder="Proses Pelaksanaan">{{ old('proses_pelaksanaan') }}</textarea>
                                <x-validation-message name="proses_pelaksanaan" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hasil">Hasil</label> 
                                <textarea name="hasil" id="hasil" class="form-control @error('hasil') is-invalid @enderror" placeholder="Hasil">{{ old('hasil') }}</textarea>
                                <x-validation-message name="hasil" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dampak">Dampak</label>
                              <textarea name="dampak" id="dampak" class="form-control @error('dampak') is-invalid @enderror" placeholder="Dampak">{{ old('dampak') }}</textarea>
                                <x-validation-message name="dampak" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tantangan">Tantangan</label> 
                                <textarea name="tantangan" id="tantangan" class="form-control @error('tantangan') is-invalid @enderror" placeholder="Tantangan">{{ old('tantangan') }}</textarea>
                                <x-validation-message name="tantangan" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pembelajaran">Pembelajaran</label>
                              <textarea name="pembelajaran" id="pembelajaran" class="form-control @error('pembelajaran') is-invalid @enderror" placeholder="Pembelajaran">{{ old('pembelajaran') }}</textarea>
                                <x-validation-message name="pembelajaran" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="peluang_replikasi">Peluang Replikasi</label>
                              <textarea name="peluang_replikasi" id="peluang_replikasi" class="form-control @error('peluang_replikasi') is-invalid @enderror" placeholder="Peluang Replikasi">{{ old('peluang_replikasi') }}</textarea>
                                <x-validation-message name="peluang_replikasi" />
                            </div>
                        </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="file">File (ex: pdf, doc,docx), Max File :2MB</label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file" aria-describedby="file" value="{{ old('file') }}"/>
                            <x-validation-message name="file" />
                        </div>
                    </div>

                       <div class="row mt-4">
                                <div class="col">
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