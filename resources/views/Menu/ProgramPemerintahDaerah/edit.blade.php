@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center" style="text-transform: uppercase">Program Kegiatan {{ Auth::user()->name }}</h1>

    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Ubah Data</span>
      </div>

      <div class="card-body">

        <form action="/menu/pemda/{{ $pemda->id }}" method="post" >
          @method('put')
          @csrf
          <div class="row">
            <div class="col-md-6">     
              <div class="form-group">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <label for="tahun_id">Pilih Tahun</label>
                <select class="form-control" name="tahun_id" id="tahun_id">
                    @foreach ($tahuns as $tahun)
                      @if(old('tahun_id', $pemda->tahun_id) == $tahun->id)    
                          <option value="{{ $tahun->id }}" selected>{{ $tahun->tahun }}</option>  
                      @else
                          <option value="{{$tahun->id }}">{{ $tahun->tahun }}</option>  
                      @endif
                    @endforeach
                </select>
              </div>
            </div>

            <div class="col-md-6">     
              <div class="form-group">
                <label for="kegiatan_id">Pilih Kegiatan</label>
                  <select class="form-control" name="kegiatan_id" id="kegiatan_id">
                    @foreach ($kegiatans as $kegiatan)
                      @if(old('kegiatan_id', $pemda->kegiatan_id) == $kegiatan->id)    
                        <option value="{{ $kegiatan->id }}" selected>{{ $kegiatan->name_kegiatan }}</option>  
                      @else
                        <option value="{{$kegiatan->id }}">{{ $kegiatan->name_kegiatan }}</option>  
                      @endif
                    @endforeach
                  </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="kode_subkegiatan">Kode Sub-Kegiatan</label>
                <input type="text" class="form-control @error('kode_subkegiatan') is-invalid @enderror" value="{{ $pemda->kode_subkegiatan }}"name="kode_subkegiatan"/>
                <x-validation-message name="kode_subkegiatan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="name_subkegiatan">Nama Sub-Kegiatan</label>
                <input type="text" multiple class="form-control pt-1 @error('name_subkegiatan') is-invalid @enderror" value="{{ $pemda->name_subkegiatan }}"  name="name_subkegiatan" />
                <x-validation-message name="name_subkegiatan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" multiple class="form-control pt-1 @error('satuan') is-invalid @enderror"id="satuan" value="{{ $pemda->satuan }}"  aria-describedby="satuan" name="satuan" />
                <x-validation-message name="satuan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="target_tahun">Target Tahun</label>
                <input type="text" class="form-control @error('target_tahun') is-invalid @enderror"id="target_tahun" value="{{ $pemda->target_tahun }}"  aria-describedby="target_tahun" name="target_tahun"/>
                <x-validation-message name="target_tahun" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_target_sem_1">Realisasi Terget Semester 1</label>
                <input type="text" multiple class="form-control pt-1 @error('realisasi_target_sem_1') is-invalid @enderror" id="realisasi_target_sem_1" value="{{ $pemda->realisasi_target_sem_1 }}" aria-describedby="realisasi_target_sem_1" name="realisasi_target_sem_1" />
                <x-validation-message name="realisasi_target_sem_1" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_target_sem_2">Realisasi Terget Semester 2</label>
                <input type="text" class="form-control @error('realisasi_target_sem_2') is-invalid @enderror" id="realisasi_target_sem_2" value="{{ $pemda->realisasi_target_sem_2 }}" aria-describedby="realisasi_target_sem_2" name="realisasi_target_sem_2"/>
                <x-validation-message name="realisasi_target_sem_2" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="alokasi_anggaran">Alokasi Anggaran</label>
                <input type="text" multiple class="form-control pt-1 @error('alokasi_anggaran') is-invalid @enderror" id="alokasi_anggaran" value="{{ $pemda->alokasi_anggaran }}" aria-describedby="alokasi_anggaran" name="alokasi_anggaran" />
                <x-validation-message name="alokasi_anggaran" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_anggaran_sem_1">Realisasi Anggaran Semester 1</label>
                <input type="text" class="form-control @error('realisasi_anggaran_sem_1') is-invalid @enderror" id="realisasi_anggaran_sem_1" value="{{ $pemda->realisasi_anggaran_sem_1 }}" aria-describedby="realisasi_anggaran_sem_1" name="realisasi_anggaran_sem_1"/>
                <x-validation-message name="realisasi_anggaran_sem_1" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_anggaran_sem_2">Realisasi Anggaran Semester 2</label>
                <input type="text" class="form-control pt-1 @error('realisasi_anggaran_sem_2') is-invalid @enderror"id="realisasi_anggaran_sem_2" value="{{ $pemda->realisasi_anggaran_sem_2 }}" aria-describedby="realisasi_anggaran_sem_2" name="realisasi_anggaran_sem_2" />
                <x-validation-message name="realisasi_anggaran_sem_2" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="sumber_pendanaan">Sumber Pendanaan</label>
                <input type="text" class="form-control @error('sumber_pendanaan') is-invalid @enderror"id="sumber_pendanaan" value="{{ $pemda->sumber_pendanaan}}" aria-describedby="sumber_pendanaan" name="sumber_pendanaan"/>
                <x-validation-message name="sumber_pendanaan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="lokasi_pelaksanaan_kegiatan">Lokasi Pelaksanaan Kegiatan</label>
                <input type="text" multiple class="form-control pt-1 @error('lokasi_pelaksanaan_kegiatan') is-invalid @enderror" id="lokasi_pelaksanaan_kegiatan" value="{{ $pemda->lokasi_pelaksanaan_kegiatan }}" aria-describedby="lokasi_pelaksanaan_kegiatan" name="lokasi_pelaksanaan_kegiatan" />
                <x-validation-message name="lokasi_pelaksanaan_kegiatan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="instansi_pelaksana">Instansi Pelaksana</label>
                <input type="text" multiple class="form-control pt-1 @error('instansi_pelaksana') is-invalid @enderror" value="{{ $pemda->user->name }}" name="instansi_pelaksana" readonly />
                <x-validation-message name="instansi_pelaksana" />
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <button type="submit"class="btn btn-success px-5" >
                Simpan
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection