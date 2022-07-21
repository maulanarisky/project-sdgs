@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Program</h1>
      
      <div class="card shadow mb-4 border-left-success" >
        <div class="card-header py-3">
            <span>Edit Data</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                  <form action="/menu/program/{{ $program->id }}" method="post" >
                    @method('put')
                    @csrf
                    <div class="row">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="kode_program">Kode Program</label>
                          <input type="text" value="{{ $program->kode_program }}" class="form-control pt-1 @error('kode_program') is-invalid @enderror" id="kode_program" aria-describedby="kode_program" name="kode_program"/>
                          <x-validation-message name="kode_program" />
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name_program">Nama Program</label>
                          <input type="text" value="{{ $program->name_program }}" class="form-control pt-1 @error('name_program') is-invalid @enderror" id="name_program" aria-describedby="name_program" name="name_program"/>
                          <x-validation-message name="name_program" />
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