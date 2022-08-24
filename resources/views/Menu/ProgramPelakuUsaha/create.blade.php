@extends('Menu.layouts.main')
@section('container')
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800 text-center" style="text-transform: uppercase">Program Pelaku Usaha</h1>

    <div class="card shadow mb-4 border-left-success" >
      <div class="card-header py-3">
          <span>Tambah Data</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">

            <form action="/menu/umkm" method="post" >
              @csrf
              <div class="row">
                <div class="col-md-6">     
                    <div class="form-group">
                        <label for="indikator_id">Pilih Indikator TPB/SDGs</label>
                        <select class="form-control" name="indikator_id" id="indikator_id">
                            @foreach ($indikators as $indikator)
                                <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }} {{ $indikator->deskripsi }}</option>
                            @endforeach
                        </select>
                        <x-validation-message name="indikator_id" />
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kode_pojk">Diisi dengan kode yang disesuaikan dengan Lampiran POJK 51/2017</label>
                    <input type="text" class="form-control pt-1 @error('kode_pojk') is-invalid @enderror" name="kode_pojk" value="{{ old('kode_pojk') }}" />
                    <x-validation-message name="kode_pojk" />
                  </div>
                </div>

                <div class="col-md-6">     
                  <div class="form-group">
                      <label for="kegiatan_pojk">Diisi dengan uraian Kegiatan yang mengacu pada POJK 51/2017 dan SSEOJK-lte-TJSL</label>
                      <input type="text" class="form-control pt-1" name="kegiatan_pojk" value="{{ old('kegiatan_pojk') }}" />
                      <x-validation-message name="kegiatan_pojk" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="no_urut"> Diisi dengan nomor urut kegiatan/proyek/program</label>
                    <input type="number" class="form-control pt-1 @error('no_urut') is-invalid @enderror" name="no_urut" value="{{ old('no_urut') }}"/>
                    <x-validation-message name="no_urut" />
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kegiatan"> Diisi dengan nama proyek/kegiatan/produk/jasa berkelanjutan </label>
                    <input type="text" class="form-control pt-1 @error('kegiatan') is-invalid @enderror" name="kegiatan" value="{{ old('kegiatan') }}"/>
                    <x-validation-message name="kegiatan" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="indikator_capaian">Diisi dengan nama indikator capaian yang menjadi ukuran keberhasilan proyek/kegiatan/produk/jasa berkelanjutan</label>
                    <input type="text"  class="form-control pt-1 @error('indikator_capaian') is-invalid @enderror" name="indikator_capaian" value="{{ old('indikator_capaian') }}"/>
                    <x-validation-message name="indikator_capaian" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="satuan">Diisi dengan satuan untuk mengukur indikator capaian (persentase, unit, rasio, orang, dst)</label>
                    <input type="text" class="form-control pt-1 @error('satuan') is-invalid @enderror" name="satuan"  value="{{ old('satuan') }}"/>
                    <x-validation-message name="satuan" />
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="waktu">Diisi dengan jangka waktu (durasi) pelaksanaan usaha sampai mencapai target yang ditetapkan dalam waktu tahun</label>
                      <input type="number" class="form-control pt-1 @error('waktu') is-invalid @enderror" name="waktu" placeholder="ex: 1 tahun" value="{{ old('waktu') }}"/>
                      <x-validation-message name="waktu" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="target">Diisi dengan angka target yang akan dicapai dengan memasukan angka target dari dokumen usaha</label>
                    <input type="text" class="form-control pt-1 @error('target') is-invalid @enderror" name="target" value="{{ old('target') }}"/>
                    <x-validation-message name="target" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="capaian">Diisi dengan angka capaian target dengan memasukan angka capaian dari dokumen termutakhir</label>
                    <input type="text" class="form-control pt-1 @error('capaian') is-invalid @enderror" name="capaian" value="{{ old('capaian') }}"/>
                    <x-validation-message name="capaian" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nama Pelaku Usaha</label>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="text" readonly value="{{ Auth::user()->name }}" class="form-control pt-1 @error('name') is-invalid @enderror" />
                    <x-validation-message name="name" />
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
    </div>
  </div>
@endsection