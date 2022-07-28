@extends('Menu.layouts.main')
@section('container')
  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center" style="text-transform: uppercase">kelola program, kegiatan, dan output kegiatan</h1>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="card shadow mb-4 border-left-success" >


      <div class="card-header py-3">
        <span >Tambah Output Kegiatan</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            
                       <form action="/menu/mitraswasta" method="post" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">     
                                            <div class="form-group">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <label for="tahun_id">Pilih Tahun</label>
                                                <select class="form-control" name="tahun_id" id="tahun_id">
                                                    @foreach ($tahuns as $tahun)
                                                        <option value="{{ $tahun->id }}">{{ $tahun->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                         </div>
                                           <div class="col-md-6">     
                                            <div class="form-group">
                                                <label for="indikator_id">Pilih Indikator</label>
                                                <select class="form-control" name="indikator_id" id="indikator_id">
                                                    @foreach ($indikators as $indikator)
                                                        <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }} {{ $indikator->deskripsi }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                         </div>
                                           {{-- <div class="col-md-6">     
                                            <div class="form-group">
                                                <label for="program_id">Pilih Program</label>
                                                <select class="form-control" name="program_id" id="program_id">
                                                    @foreach ($programs as $program)
                                                    @if ($program->user->id == Auth::user()->id)
                                                        <option value="{{ $program->id }}">{{ $program->kode_program }} {{ $program->name_program }}</option>   
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                         </div> --}}
                                           <div class="col-md-6">     
                                            <div class="form-group">
                                                <label for="kegiatan_id">Pilih Kegiatan</label>
                                                <select class="form-control" name="kegiatan_id" id="kegiatan_id">
                                                    @foreach ($kegiatans as $kegiatan)
                                                    @if ($kegiatan->user->id == Auth::user()->id)
                                                        <option value="{{ $kegiatan->id }}">{{ $kegiatan->kode_kegiatan }} {{ $kegiatan->name_kegiatan }}</option>   
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                         </div>
                      
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="name_outputkegiatan">Nama Output Kegiatan</label>
                                              <input type="text" multiple class="form-control pt-1 @error('name_outputkegiatan') is-invalid @enderror" id="name_outputkegiatan"aria-describedby="name_outputkegiatan" name="name_outputkegiatan" />
                                                @error('name_outputkegiatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                              @enderror
                                            </div>
                                          </div>
                                          {{-- <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="satuan">Satuan</label>
                                              <input type="text" multiple class="form-control pt-1"id="satuan"aria-describedby="satuan" name="satuan" />
                                            </div>
                                          </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="target_tahun">Target Tahun</label>
                                            <input type="text" class="form-control"id="target_tahun"aria-describedby="target_tahun" name="target_tahun"/>
                                          </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="realisasi_target_sem_1">Realisasi Terget Semester 1</label>
                                              <input type="text" multiple class="form-control pt-1"id="realisasi_target_sem_1"aria-describedby="realisasi_target_sem_1" name="realisasi_target_sem_1" />
                                            </div>
                                          </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="realisasi_target_sem_2">Realisasi Terget Semester 2</label>
                                            <input type="text" class="form-control"id="realisasi_target_sem_2"aria-describedby="realisasi_target_sem_2" name="realisasi_target_sem_2"/>
                                          </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="alokasi_anggaran">Alokasi Anggaran</label>
                                              <input type="text" multiple class="form-control pt-1"id="alokasi_anggaran"aria-describedby="alokasi_anggaran" name="alokasi_anggaran" />
                                            </div>
                                          </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="realisasi_anggaran_sem_1">Realisasi Anggaran Semester 1</label>
                                            <input type="text" class="form-control"id="realisasi_anggaran_sem_1"aria-describedby="realisasi_anggaran_sem_1" name="realisasi_anggaran_sem_1"/>
                                          </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="realisasi_anggaran_sem_2">Realisasi Anggaran Semester 2</label>
                                              <input type="text" multiple class="form-control pt-1"id="realisasi_anggaran_sem_2"aria-describedby="realisasi_anggaran_sem_2" name="realisasi_anggaran_sem_2" />
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="lokasi_pelaksanaan_kegiatan">Lokasi Pelaksanaan Kegiatan</label>
                                              <input type="text" multiple class="form-control pt-1"id="lokasi_pelaksanaan_kegiatan"aria-describedby="lokasi_pelaksanaan_kegiatan" name="lokasi_pelaksanaan_kegiatan" />
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="instansi_pelaksana">Instansi Pelaksana</label>
                                              <input type="text" multiple class="form-control pt-1"id="instansi_pelaksana"aria-describedby="instansi_pelaksana" name="instansi_pelaksana" />
                                            </div>
                                          </div> --}}
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
    </div>
  </div>
    
@endsection