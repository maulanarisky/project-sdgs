@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center" style="text-transform: uppercase">Program Kegiatan {{ Auth::user()->name }}</h1>

    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Ubah Data</span>
      </div>

      <div class="card-body">

        <form action="/menu/pkabkota/{{ $pkabkota->id }}" method="post" >
          @method('put')
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="indikator_id">Indikator TPB</label>
                  <select class="@error('indikator_id') is-invalid @enderror form-control" name="indikator_id" id="indikator_id" required>
                        <option value=""> pilih Indikator TPB</option> 
                      @foreach ($indikators as $indikator)
                              @if (old('indikator_id', $pkabkota->indikator_id == $indikator->id))
                                  <option value="{{ $indikator->id }}" selected>{{ $indikator->kode_indikator }}. {{ Str::limit($indikator->deskripsi, 20) }}</option> 
                              @else
                                  <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }}.{{ Str::limit($indikator->deskripsi, 50) }}</option>   
                              @endif
                      @endforeach
                  </select>
                  <x-validation-message name="indikator_id" />
              </div>
          </div>
            <div class="col-md-6">     
              <div class="form-group">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="kabkota_id" value="{{ $pkabkota->kabkota_id }}">
                <label for="tahun_id">Tahun</label>
                 <input type="text" class="form-control @error('tahun_id') is-invalid @enderror" value="{{ $pkabkota->tahun->name }}" name="tahun_id" readonly/>
                <x-validation-message name="tahun_id" />
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="name_subkegiatan_kabkota">Nama SubKegiatan</label>
                <input type="text" multiple class="form-control pt-1 @error('name_subkegiatan_kabkota') is-invalid @enderror" readonly value="{{ $pkabkota->Kabkota->name_subkegiatan_kabkota }}"  name="name_subkegiatan_kabkota" />
                <x-validation-message name="name_subkegiatan_kabkota" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" multiple class="form-control pt-1 @error('satuan') is-invalid @enderror"id="satuan" readonly value="{{ $pkabkota->Kabkota->satuan }}"  aria-describedby="satuan" name="satuan" />
                <x-validation-message name="satuan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="target_tahun">Target Tahun</label>
                <input type="text" class="form-control @error('target_tahun') is-invalid @enderror"id="target_tahun" value="{{ $pkabkota->target_tahun }}"  aria-describedby="target_tahun" name="target_tahun"/>
                <x-validation-message name="target_tahun" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_target_sem_1">Realisasi Terget Semester 1</label>
                <input type="text" multiple class="form-control pt-1 @error('realisasi_target_sem_1') is-invalid @enderror" id="realisasi_target_sem_1" value="{{ $pkabkota->realisasi_target_sem_1 }}" aria-describedby="realisasi_target_sem_1" name="realisasi_target_sem_1" />
                <x-validation-message name="realisasi_target_sem_1" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_target_sem_2">Realisasi Terget Semester 2</label>
                <input type="text" class="form-control @error('realisasi_target_sem_2') is-invalid @enderror" id="realisasi_target_sem_2" value="{{ $pkabkota->realisasi_target_sem_2 }}" aria-describedby="realisasi_target_sem_2" name="realisasi_target_sem_2"/>
                <x-validation-message name="realisasi_target_sem_2" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="alokasi_anggaran">Alokasi Anggaran</label>
                <input type="text" multiple class="form-control pt-1 @error('alokasi_anggaran') is-invalid @enderror" id="alokasi_anggaran" value="{{ $pkabkota->alokasi_anggaran }}" aria-describedby="alokasi_anggaran" name="alokasi_anggaran" />
                <x-validation-message name="alokasi_anggaran" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_anggaran_sem_1">Realisasi Anggaran Semester 1</label>
                <input type="text" class="form-control @error('realisasi_anggaran_sem_1') is-invalid @enderror" id="realisasi_anggaran_sem_1" value="{{ $pkabkota->realisasi_anggaran_sem_1 }}" aria-describedby="realisasi_anggaran_sem_1" name="realisasi_anggaran_sem_1"/>
                <x-validation-message name="realisasi_anggaran_sem_1" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="realisasi_anggaran_sem_2">Realisasi Anggaran Semester 2</label>
                <input type="text" class="form-control pt-1 @error('realisasi_anggaran_sem_2') is-invalid @enderror"id="realisasi_anggaran_sem_2" value="{{ $pkabkota->realisasi_anggaran_sem_2 }}" aria-describedby="realisasi_anggaran_sem_2" name="realisasi_anggaran_sem_2" />
                <x-validation-message name="realisasi_anggaran_sem_2" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="sumber_pendanaan">Sumber Pendanaan</label>
                <input type="text" class="form-control @error('sumber_pendanaan') is-invalid @enderror"id="sumber_pendanaan" value="{{ $pkabkota->sumber_pendanaan}}" aria-describedby="sumber_pendanaan" name="sumber_pendanaan"/>
                <x-validation-message name="sumber_pendanaan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="lokasi_pelaksanaan_kegiatan">Lokasi Pelaksanaan Kegiatan</label>
                <input type="text" multiple class="form-control pt-1 @error('lokasi_pelaksanaan_kegiatan') is-invalid @enderror" id="lokasi_pelaksanaan_kegiatan" value="{{ $pkabkota->lokasi_pelaksanaan_kegiatan }}" aria-describedby="lokasi_pelaksanaan_kegiatan" name="lokasi_pelaksanaan_kegiatan" />
                <x-validation-message name="lokasi_pelaksanaan_kegiatan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="instansi_pelaksana">Instansi Pelaksana</label>
                <input type="text" multiple class="form-control pt-1 @error('instansi_pelaksana') is-invalid @enderror" value="{{ $pkabkota->user->name }}" name="instansi_pelaksana" readonly />
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