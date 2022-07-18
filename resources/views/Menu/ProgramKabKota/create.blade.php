@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center" style="text-transform: uppercase">Sub Kegiatan {{ Auth::user()->name }}</h1>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="card shadow mb-4 border-left-success" >

      <div class="card-header py-3">
        <span >Tambah Program Baru</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            
            <form action="/menu/program" method="post" >
              @csrf
              <div class="row">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
  
                <div class="col-md-5">
                  <label for="indikator_id">Pilih Indikator</label>
                  <select class="form-control" name="indikator_id">
                      <option value="">Pilih Indikator</option>
                      @foreach ($indikators as $indikator)
                          <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }} {{ $indikator->deskripsi }}</option>                                           
                      @endforeach
                  </select>
                  <x-validation-message name="indikator_id" />
                </div>
      
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="name_program">Nama Program</label>
                    <input type="text" class="form-control pt-1 @error('name_program') is-invalid @enderror" id="name_program"aria-describedby="name_program" name="name_program"/>
                    <x-validation-message name="name_program" />
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col">
                    <button type="submit" class="btn btn-success"> Tambah Program</button>
                  </div>
                </div>
              </div>
  
  
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Tambah Kegiatan Baru</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">

            <form action="/menu/kegiatan" method="post" >
              @csrf
              <div class="row">
                <div class="col-md-5">     
                  <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="program_id">Pilih Program </label>
                    <select class="form-control" name="program_id" id="program_id">
                      @foreach ($programs as $program)
                        @if ($program->user->id == Auth::user()->id)
                          <option value="{{ $program->id }}">{{ $program->name_program }}</option>   
                        @endif
                      @endforeach
                    </select>
                    <x-validation-message name="program_id" />
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label for="name_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control pt-1 @error('name_kegiatan') is-invalid @enderror" id="name_kegiatan" aria-describedby="name_kegiatan"name="name_kegiatan"/>
                    <x-validation-message name="name_kegiatan" />
                  </div>
                </div> 

                <div class="row mt-4">
                  <div class="col">
                    <button type="submit" class="btn btn-success "> Tambah Kegiatan </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Tambah Sub Kegiatan</span>
      </div>
      <div class="card-body">
        <form action="/menu/pemda" method="post" >
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
                <label for="kode_subkegiatan">Kode Sub-Kegiatan</label>
                <input type="text" class="form-control @error('kode_subkegiatan') is-invalid @enderror" name="kode_subkegiatan"/>
                <x-validation-message name="kode_subkegiatan" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="name_subkegiatan">Nama Sub-Kegiatan</label>
                <input type="text" multiple class="form-control pt-1 @error('kode_subkegiatan') is-invalid @enderror" name="name_subkegiatan" />
                <x-validation-message name="name_subkegiatan" />
              </div>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <button type="submit"class="btn btn-success px-5" >
                Tambah Sub Kegiatan
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>  
@endsection