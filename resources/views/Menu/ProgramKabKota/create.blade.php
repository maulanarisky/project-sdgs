@extends('Menu.layouts.main')
@section('container')

<div class="container-fluid">

  <h1 class="h3 mb-2 text-gray-800 text_center">Pilih Indikator Dan Sub Kegiatan</h1>
  

       <!-- Input Data Example -->

  <div class="card shadow mb-4 border-left-success" >
    <div class="card-header py-3">
      <span>Tambah Program</span>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12">
          
          <form action="/menu/pkabkota" method="post" >
            @csrf
            <div class="row">
               <div class="col-md-6">
                            <div class="form-group">
                              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                              <label for="indikator_id">Indikator TPB</label>
                                  <select class="@error('indikator_id') is-invalid @enderror form-control" name="indikator_id" id="indikator_id" required>
                                    <option value=""> Pilih Indikator TPB</option> 
                                    @foreach ($indikators as $indikator)
                                        <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }}.{{ Str::limit($indikator->deskripsi, 50) }}</option>
                                    
                                    @endforeach
                                </select>
                                <x-validation-message name="indikator_id" />
                            </div>
                        </div>

                        <div class="col-md-6">
                              <div class="form-group">
                              <label for="kabkota_id">Sub Kegiatan</label>
                                  <select class="@error('kabkota_id') is-invalid @enderror form-control" name="kabkota_id" id="kabkota_id" required>
                                    <option value=""> Pilih Subkegiatan</option> 
                                    @foreach ($kabkotas as $kab)
                                        <option value="{{ $kab->id }}">{{ $kab->kode_subkegiatan_kabkota }}.{{ $kab->name_subkegiatan_kabkota }}</option>
                                    @endforeach
                                </select>
                                <x-validation-message name="kabkota_id" />
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