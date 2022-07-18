@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sub Kegiatan Kab/Kota</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Uabh Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                    <form action="/menu/kabkota/{{ $kab->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="row">
                            <input type="hidden" name="kabkota_id" id="kabkota_id" value="{{ $kab->id }}"/>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="program_kabkota">Program</label>
                                        <input name="program_kabkota" id="program_kabkota" value="{{ $kab->program_kabkota }}" type="text" class="@error('program_kabkota') is-invalid @enderror form-control" aria-describedby="program_kabkota"/>
                                        <x-validation-message name="program_kabkota" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kegiatan_kabkota">Kegiatan</label>
                                        <input name="kegiatan_kabkota" id="kegiatan_kabkota" value="{{ $kab->kegiatan_kabkota }}" type="text" class="@error('kegiatan_kabkota') is-invalid @enderror form-control" aria-describedby="nama_subkegiatan_kabkota"/>
                                        <x-validation-message name="kegiatan_kabkota" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_subkegiatan_kabkota">Nama Sub Kegiatan</label>
                                        <input name="name_subkegiatan_kabkota" id="name_subkegiatan_kabkota" value="{{ $kab->name_subkegiatan_kabkota }}" type="text" class="@error('name_subkegiatan_kabkota') is-invalid @enderror form-control" aria-describedby="name_subkegiatan_kabkota"/>
                                        <x-validation-message name="name_subkegiatan_kabkota" />
                                    </div>
                                </div>
                                <input name="kode_subkegiatan_kabkota" id="kode_subkegiatan_kabkota" value="{{ $kab->kode_subkegiatan_kabkota }}" type="hidden" class="@error('kode_subkegiatan_kabkota') is-invalid @enderror form-control" aria-describedby="kode_sub_subkegiatan"/>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="indikator_kabkota">Indikator Sub Kegiatan</label>
                                        <input name="indikator_kabkota" id="indikator" value="{{ $kab->indikator_kabkota }}" type="text" class="@error('indikator_kabkota') is-invalid @enderror form-control" aria-describedby="indikator_kabkota"/>
                                        <x-validation-message name="indikator_kabkota" />
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="indikator_id">Indikator TPB</label>
                                        <select class="@error('indikator_id') is-invalid @enderror form-control" name="indikator_id" id="indikator_id" required>
                                             <option value=""> pilih Indikator TPB</option> 
                                            @foreach ($indikators as $indikator)
                                                    @if (old('indikator_id', $kab->indikator_id == $indikator->id))
                                                        <option value="{{ $indikator->id }}" selected>{{ $indikator->kode_indikator }}. {{ $indikator->deskripsi }}</option> 
                                                    @else
                                                        <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }}.{{ $indikator->deskripsi }}</option>   
                                                    @endif
                                            @endforeach
                                        </select>
                                        <x-validation-message name="indikator_id" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <input name="satuan" id="satuan" value="{{ $kab->satuan }}" type="text" class="@error('satuan') is-invalid @enderror form-control" aria-describedby="satuan"/>
                                        <x-validation-message name="satuan" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_id">Pilih Sumber Data</label>
                                        <select class="@error('user_id') is-invalid @enderror form-control" name="user_id" id="user_id" required>
                                             <option value=""> Pilih Sumber Data</option> 
                                            @foreach ($users as $user)
                                                @if ($user->role_id == 6)
                                                    @if (old('user_id', $kab->user_id == $user->id))
                                                        <option value="{{ $user->id }}" selected> {{ $user->name }}</option> 
                                                    @else
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>   
                                                    @endif                                           
                                                @endif
                                            @endforeach
                                        </select>
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