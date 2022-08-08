@extends('Menu.layouts.main')
@section('container')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center" style="text-transform: uppercase">Rencana Tindak lanjut</h1>

    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Tambah Data</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">

            <form action="/menu/rtl" method="post" >
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="indikator_id">Indikator TPB</label>
                      <select class="@error('indikator_id') is-invalid @enderror form-control" name="indikator_id" id="indikator_id" required>
                        <option value=""> Pilih Indikator TPB</option> 
                        @foreach ($indikators as $indikator)
                        @if ($indikator->user_id == Auth::user()->id)
                            <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }}.{{ Str::limit($indikator->deskripsi, 50) }}</option>
                        @elseif (Auth::user()->role_id != 2 &&  Auth::user()->role_id != 3 )
                            <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }}.{{ Str::limit($indikator->deskripsi, 50)}}</option>
                        @endif
                        @endforeach
                    </select>
                    <x-validation-message name="indikator_id" />
                </div>
            </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi Masalah</label>
                    <input type="text" multiple class="form-control pt-1 @error('deskripsi') is-invalid @enderror" id="deskripsi"aria-describedby="deskripsi" name="deskripsi" />
                    <x-validation-message name="deskripsi" />
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="kategori">Kategori Masalah</label>
                    <select class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori">
                      <option value="sumber daya manusia">Sumber Daya Manusia</option> 
                      <option value="Kelembagaan">Kelembagaan</option> 
                      <option value="Keuangan">Keuangan</option> 
                      <option value="Regulasi">Regulasi</option> 
                      <option value="Operasional">Operasional</option> 
                      <option value="Politik">Politik</option> 
                      <option value="">Lainnya..</option> 
                    </select>
                    <x-validation-message name="kategori" />
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="kategori">Lainnya...</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategoriLainnya" name="kategori" disabled="true"/>
                    <x-validation-message name="kategori" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="rtk">Rencana Tindak Lanjut</label>
                    <input type="text" multiple class="form-control pt-1 @error('rtk') is-invalid @enderror" id="rtk"aria-describedby="rtk" name="rtk" />
                    <x-validation-message name="rtk" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pelaksana">Institusi Pelaksana</label>
                    <input type="text" readonly class="form-control pt-1 @error('pelaksana') is-invalid @enderror" value="{{ Auth::user()->name }}" id="pelaksana"aria-describedby="pelaksana" name="pelaksana" />
                    <input type="hidden" readonly class="form-control pt-1 @error('pelaksana') is-invalid @enderror" value="{{ Auth::user()->id }}"name="user_id" id="pelaksana"aria-describedby="pelaksana" name="pelaksana" />
                    <x-validation-message name="pelaksana" /> 
                  </div>
                </div>  
              </div>

              <div class="row mt-2">
                <div class="col">
                  <button type="submit"class="btn btn-success px-5" > Simpan </button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("kategori").addEventListener("change", function () {
      if (this.value == 0) {
        document.getElementById("kategoriLainnya").disabled = false;
      } else {
        document.getElementById("kategoriLainnya").disabled = true;
      }
    });
  </script>
    
@endsection