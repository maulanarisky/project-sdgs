@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sub Kegiatan Provinsi</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Uabh Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/subkegiatan/{{ $subkegiatan->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="row">
                            <input type="hidden" name="sub_kegiatan_id" id="sub_kegiatan_id" value="{{ $subkegiatan->id }}"/>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="program">Program</label>
                                        <input name="program" id="program" readonly value="{{ $subkegiatan->program }}" type="text" class="@error('program') is-invalid @enderror form-control" aria-describedby="program"/>
                                        <x-validation-message name="program" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kegiatan">Kegiatan</label>
                                        <input name="kegiatan" id="kegiatan" readonly value="{{ $subkegiatan->kegiatan }}" type="text" class="@error('kegiatan') is-invalid @enderror form-control" aria-describedby="nama_subkegiatan"/>
                                        <x-validation-message name="kegiatan" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_sub_kegiatan">Nama Sub Kegiatan</label>
                                        <input name="name_sub_kegiatan" id="name_sub_kegiatan" readonly value="{{ $subkegiatan->name_sub_kegiatan }}" type="text" class="@error('name_sub_kegiatan') is-invalid @enderror form-control" aria-describedby="name_sub_kegiatan"/>
                                        <x-validation-message name="name_sub_kegiatan" />
                                    </div>
                                </div>
                                <input name="kode_sub_kegiatan" id="kode_sub_kegiatan" value="{{ $subkegiatan->kode_sub_kegiatan }}" type="hidden" class="@error('kode_sub_kegiatan') is-invalid @enderror form-control" aria-describedby="kode_sub_subkegiatan"/>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="indikator">Indikator Sub Kegiatan</label>
                                        <input name="indikator_sub" id="indikator" readonly value="{{ $subkegiatan->indikator_sub }}" type="text" class="@error('indikator') is-invalid @enderror form-control" aria-describedby="indikator"/>
                                        <x-validation-message name="indikator" />
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="indikator_id">Indikator TPB</label>
                                        <select class="@error('indikator_id') is-invalid @enderror form-control" name="indikator_id" id="indikator_id" required>
                                             <option value=""> pilih Indikator TPB</option> 
                                            @foreach ($indikators as $indikator)
                                            @if ($indikator->user_id == Auth::user()->id)
                                                @if (old('indikator_id', $subkegiatan->indikator_id == $indikator->id))
                                                    <option value="{{ $indikator->id }}" selected>{{ $indikator->kode_indikator }}. {{ $indikator->deskripsi }}</option> 
                                                @else
                                                    <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }}.{{ $indikator->deskripsi }}</option>   
                                                @endif
                                            @endif
                                            @endforeach
                                        </select>
                                        <x-validation-message name="indikator_id" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <input name="satuan" id="satuan" value="{{ $subkegiatan->satuan }}" readonly type="text" class="@error('satuan') is-invalid @enderror form-control" aria-describedby="satuan"/>
                                        <x-validation-message name="satuan" />
                                    </div>
                                </div>

                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_id">Sumber Data</label>
                                        <input name="user_id" id="user_id" readonly value="{{ Auth::user()->id }}" type="hidden" class="@error('user_id') is-invalid @enderror form-control" aria-describedby="user_id"/>
                                        <input name="" id="user_id" readonly value="{{ Auth::user()->name }}" type="text" class="@error('user_id') is-invalid @enderror form-control" aria-describedby="user_id"/>
                                        <x-validation-message name="user_id" />
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#tujuan').on('change', function() {
            var tujuanID = $(this).val();
            if(tujuanID) {
                $.ajax({
                    url: '/getTarget/'+tujuanID,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success:function(data){
                            if(data){
                                $('#target').empty();   
                                $('#target').append('<option hidden>Pilih target</option>'); 
                                $.each(data, function(key, target){
                                    $('select[name="target_id"]').append('<option value="'+ target.id +'">' + target.kode_target +' '+ target.deskripsi+ '</option>');
                                });
                            }else{
                                $('#target').empty();
                            }
                        }
                    });
            }else{
                $('#target').empty();
            }
            });
        });
    </script>

@endsection