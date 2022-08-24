@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 text-center">Detail Pelaporan Pembelajaran</h1>
            <p class="mb-4"></p>

            <!-- view example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <a href="/menu/pp/download/{{$pp->id }}" class="btn btn-danger">Download File</a>
                <a href="/menu/pp/print/{{$pp->id }}" target="_blank" class="btn btn-warning">Print</a>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Nama tujuan dalam TPB/SDGs</label>
                      <input type="text" class="form-control garis" value ="{{$pp->tujuan->name }}" style="background-color: white" readonly />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Nama institusi</label>
                      <input type="text" class="form-control garis"
                        value="{{$pp->user->name}}"
                        style="background-color: white"
                        readonly
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Nama program</label>
                      <input type="text" class="form-control garis" value="{{ $pp->name_program }}" style="background-color: white" readonly />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Lokasi dan waktu kegiatan</label>
                      <input type="text" class="form-control garis"
                        value="{{ $pp->lokasi }}, {{ $pp->waktu }}"style="background-color: white"readonly />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="name">Latar belakang</label>
                      <textarea name="latar_belakang" id="" cols="30" rows="4" class="form-control garis" style="background-color: white; resize: none"readonly>{{ $pp->latar_belakang }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="name" >Proses Pelaksanaan (strategi, pihak terlibat, penerimaan manfaat, dll)</label >
                      <textarea id="" cols="30" rows="4"class="form-control garis" style="background-color: white; resize: none" readonly>{{ $pp->proses_pelaksanaan }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Hasil</label>
                      <textarea name="hasil" id=""cols="30" rows="4" class="form-control garis" style="background-color: white; resize: none" readonly >{{ $pp->hasil }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Dampak</label>
                      <textarea id="" cols="30" rows="4"class="form-control garis" style="background-color: white; resize: none"readonly>{{ $pp->dampak }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Tantangan</label>
                      <textarea id="" cols="30" rows="4"class="form-control garis" style="background-color: white; resize: none"readonly >{{ $pp->tantangan }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Pembelajaran</label>
                      <textarea id="" cols="30"rows="4" class="form-control garis" style="background-color: white; resize: none" readonly>{{ $pp->pembelajaran }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="name">Peluang replikasi</label>
                      <textarea id=""  cols="30"  rows="4" class="form-control garis" style="background-color: white; resize: none" readonly >{{ $pp->peluang_replikasi }}</textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
@endsection