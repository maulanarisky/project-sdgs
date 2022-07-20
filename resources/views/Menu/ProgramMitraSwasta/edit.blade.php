@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800" style="text-transform: uppercase">Program Kegiatan Mitra Swasta</h1>
    <p class="mb-4">Tambah Data </p>

    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Tambah Data</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            
            <form action="/menu/mitraswasta/{{ $mitraswastum->id }}" method="post" >
              @method('put')
              @csrf
              <div class="row">
                <div class="col-md-6">     
                  <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="tahun_id">Pilih Tahun</label>
                    <select class="form-control @error('tahun_id') is-invalid @enderror" name="tahun_id" id="tahun_id">
                        @foreach ($tahuns as $tahun)
                          @if(old('tahun_id', $mitraswastum->tahun_id) == $tahun->id)    
                              <option value="{{ $tahun->id }}" selected>{{ $tahun->name }}</option>  
                          @else
                              <option value="{{$tahun->id }}">{{ $tahun->name }}</option>  
                          @endif
                        @endforeach
                    </select>
                    <x-validation-message name="tahun_id" />
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name_outputkegiatan">Nama Output Kegiatan</label>
                      <input type="text"  name="name_outputkegiatan" class="form-control pt-1 @error('name_outputkegiatan') is-invalid @enderror"value="{{ $mitraswastum->name_outputkegiatan }}"/>
                      <x-validation-message name="name_outputkegiatan" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="satuan">SATUAN : Diisi dengan satuan untuk mengukur output kegiatan (persentase, unit, rasio, orang, dst)</label>
                      <input type="text" name="satuan" class="form-control pt-1 @error('satuan') is-invalid @enderror" value="{{ $mitraswastum->satuan }}" />
                      <x-validation-message name="satuan" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="target_tahun">TARGET : Diisi dengan target capaian untuk setiap output kegiatan pada 
                        tahun yang bersangkutan dengan memasukan data dari dokumen resmi termutakhir</label>
                      <input type="text" name="target_tahun" class="form-control @error('target_tahun') is-invalid @enderror" value="{{ $mitraswastum->target_tahun }}"/>
                      <x-validation-message name="target_tahun" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="realisasi_target_sem_1">REALISASI TARGET SEMESTER 1 : Diisi dengan capaian/realisasi output kegiatan pada semester I 
                      tahun yang bersangkutan dengan memasukan data dari dokumen resmi termutakhir</label>
                      <input type="text" name="realisasi_target_sem_1" class="form-control pt-1 @error('realisasi_target_sem_1') is-invalid @enderror" value="{{ $mitraswastum->realisasi_target_sem_1 }}" />
                      <x-validation-message name="realisasi_target_sem_1" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="realisasi_target_sem_2">REALISASI TARGET SEMESTER 2 : Diisi dengan capaian/realisasi output kegiatan pada semester II 
                        tahun yang bersangkutan dengan memasukan data dari dokumen resmi termutakhir</label>
                      <input type="text" name="realisasi_target_sem_2" class="form-control @error('realisasi_target_sem_2') is-invalid @enderror" value="{{ $mitraswastum->realisasi_target_sem_2 }}"/>
                      <x-validation-message name="realisasi_target_sem_2" />
                    </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="alokasi_anggaran">ALOKASI ANGGARAN : Diisi dengan alokasi anggaran untuk setiap output kegiatan.
                          Data mengacu pada dokumen resmi seperti rencana kerja lembaga non pemerintah</label>
                        <input type="text" name="alokasi_anggaran" class="form-control pt-1 @error('alokasi_anggaran') is-invalid @enderror" value="{{ $mitraswastum->alokasi_anggaran }}"/>
                        <x-validation-message name="alokasi_anggaran" />
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="realisasi_anggaran_sem_1">REALISASI ANGGARAN SEMESTER 1 : Diisi dengan realisasi anggaran pada semester I yang 
                        dihitung selama tahun berjalan untuk setiap output kegiatan</label>
                      <input type="text" name="realisasi_anggaran_sem_1" class="form-control @error('realisasi_anggaran_sem_1') is-invalid @enderror" value="{{ $mitraswastum->realisasi_anggaran_sem_1 }}"/>
                      <x-validation-message name="realisasi_anggaran_sem_1" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="realisasi_anggaran_sem_2">REALISASI ANGGARAN SEMESTER 2 : Diisi dengan realisasi anggaran pada semester 2 yang 
                        dihitung selama tahun berjalan untuk setiap output kegiatan</label>
                      <input type="text" name="realisasi_anggaran_sem_2"  class="form-control pt-1 @error('realisasi_anggaran_sem_2') is-invalid @enderror" value="{{ $mitraswastum->realisasi_anggaran_sem_2 }}"/>
                      <x-validation-message name="realisasi_anggaran_sem_2" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="sumber_pendanaan">SUMBER PENDANAAN : Diisi dengan sumber pendanaan untuk pelaksanaan output 
                        kegiatan tersebut pada tahun yang bersangkutan;</label>
                      <input type="text" name="sumber_pendanaan" class="form-control @error('sumber_pendanaan') is-invalid @enderror" value="{{ $mitraswastum->sumber_pendanaan}}"/>
                      <x-validation-message name="sumber_pendanaan" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lokasi_pelaksanaan_kegiatan">LOKASI PELAKSANAAN KEGIATAN : Diisi dengan lokasi aktual pelaksanaan output kegiatan pada 
                        lembaga pelaksana non pemerintah (tingkat nasional, provinsi,kabupaten/kota, kecamatan, desa)</label>
                      <input type="text" name="lokasi_pelaksanaan_kegiatan" class="form-control pt-1 @error('lokasi_pelaksanaan_kegiatan') is-invalid @enderror" value="{{ $mitraswastum->lokasi_pelaksanaan_kegiatan }}"/>
                      <x-validation-message name="lokasi_pelaksanaan_kegiatan" />
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