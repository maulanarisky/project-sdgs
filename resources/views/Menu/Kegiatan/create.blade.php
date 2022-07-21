@extends('Menu.layouts.main')
@section('container')
  <div class="container-fluid">
    
    <h1 class="h3 mb-2 text-gray-800 text-center">Program->Kegiatan</h1>


    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Tambah Data Kegiatan</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">

            <form action="/menu/kegiatan" method="post" >
              @csrf
              <div class="row">
                <div class="col-md-6">     
                  <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="program_id">Pilih Program </label>
                    <select class="form-control" name="program_id" id="program_id">
                      @foreach ($programs as $program)
                        @if ($program->user->id == Auth::user()->id)
                          <option value="{{ $program->id }}">{{ $program->kode_program }}.{{ $program->name_program }}</option>   
                        @endif
                      @endforeach
                    </select>
                    <x-validation-message name="program_id" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control pt-1 @error('name_kegiatan') is-invalid @enderror" id="name_kegiatan" aria-describedby="name_kegiatan"name="name_kegiatan"/>
                    <x-validation-message name="name_kegiatan" />
                  </div>
                </div> 
              </div>
              <div class="row mt-2">
                <div class="col">
                  <button type="submit" class="btn btn-success px-5"> Simpan </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection