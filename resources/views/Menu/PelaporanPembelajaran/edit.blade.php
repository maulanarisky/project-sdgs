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
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                       <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_id">Pilih Tujuan</label>
                                        <select class="@error('tujuan_id') is-invalid @enderror form-control" name="tujuan_id" id="tujuan">
                                            @foreach ($tujuans as $tujuan)
                                                @if (old('tujuan_id', $pp->tujuan_id === $tujuan->id))
                                                    <option value="{{ $tujuan->id }}" selected>{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option> 
                                                @else
                                                    <option style="text-transform: uppercase" value="{{ $tujuan->id }}">{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option>   
                                                @endif
                                            @endforeach
                                        </select>
                                        <x-validation-message name="tujuan_id" />
                                    </div>
                                </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_program">Nama Program</label>
                                <input type="text" name="name_program"class="form-control @error('name_program') is-invalid @enderror" value="{{ $pp->name_program }}" id="name_program" autofocus placeholder=" ex: Program {{ Auth::user()->name }}"/>
                                <x-validation-message name="name_program" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi"class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" value="{{ $pp->lokasi }}" autofocus placeholder=" ex: Lokasi"/>
                                <x-validation-message name="lokasi" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="date" name="waktu"class="form-control @error('waktu') is-invalid @enderror" id="waktu" value="{{ $pp->waktu }}" autofocus placeholder=" ex: Program"/>
                                <x-validation-message name="waktu" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latar_belakang">Latar Belakang</label> 
                                <textarea name="latar_belakang" id="latar_belakang" class="form-control @error('latar_belakang') is-invalid @enderror" placeholder="Latar Belakang">{{ $pp->latar_belakang }}</textarea>
                                <x-validation-message name="latar_belakang" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="proses_pelaksanaan">Proses Pelaksanaan</label>
                              <textarea name="proses_pelaksanaan" id="proses_pelaksanaan" class="form-control @error('proses_pelaksanaan') is-invalid @enderror" placeholder="Proses Pelaksanaan"> {{ $pp->proses_pelaksanaan }}</textarea>
                                <x-validation-message name="proses_pelaksanaan" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hasil">Hasil</label> 
                                <textarea name="hasil" id="hasil" class="form-control @error('hasil') is-invalid @enderror" placeholder="Hasil">{{ $pp->hasil }}</textarea>
                                <x-validation-message name="hasil" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dampak">Dampak</label>
                              <textarea name="dampak" id="dampak" class="form-control @error('dampak') is-invalid @enderror" placeholder="Dampak" >{{ $pp->dampak }}</textarea>
                                <x-validation-message name="dampak" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tantangan">Tantangan</label> 
                                <textarea name="tantangan" id="tantangan" class="form-control @error('tantangan') is-invalid @enderror" placeholder="Tantangan" >{{ $pp->tantangan }}</textarea>
                                <x-validation-message name="tantangan" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pembelajaran">Pembelajaran</label>
                              <textarea name="pembelajaran" id="pembelajaran" class="form-control @error('pembelajaran') is-invalid @enderror" placeholder="Pembelajaran" >{{ $pp->pembelajaran }}</textarea>
                                <x-validation-message name="pembelajaran" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="peluang_replikasi">Peluang Replikasi</label>
                              <textarea name="peluang_replikasi" id="peluang_replikasi" class="form-control @error('peluang_replikasi') is-invalid @enderror" placeholder="Peluang Replikasi">{{ $pp->peluang_replikasi }}</textarea>
                                <x-validation-message name="peluang_replikasi" />
                            </div>
                        </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="file">File (ex: pdf, doc,docx), Max File :2MB</label>
                            <input type="hidden" name="oldFile" value="{{ $pp->file }}">
                            {{-- @if ($pp->file)
                            <input type="file" value="{{ asset('storage/' . $pp->file) }}" name="file">
                            @else
                            <input type="file" value="" name="file">
                            @endif --}}
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file" aria-describedby="file"/>
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
        </div>
    </div>
@endsection