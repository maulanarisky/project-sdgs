@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Indikator</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Uabh Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/indikator/{{ $indikator->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_id">Pilih Tujuan</label>
                                        {{-- <select class="@error('tujuan_id') is-invalid @enderror form-control" name="tujuan_id" id="tujuan">
                                            @foreach ($tujuans as $tujuan)
                                                @if (old('tujuan_id', $indikator->tujuan_id === $tujuan->id))
                                                    <option value="{{ $tujuan->id }}" selected>{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option> 
                                                @else
                                                    <option style="text-transform: uppercase" value="{{ $tujuan->id }}">{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option>   
                                                @endif
                                            @endforeach
                                        </select> --}}
                                        <input type="hidden" name="tujuan_id" id="tujuan_id" value="{{ $indikator->tujuan_id }}"/>
                                        <input name="" id="tujuan_id" value="{{ $indikator->tujuan->kode_tujuan }} {{ $indikator->tujuan->name }}" readonly type="text" class="@error('tujuan_id') is-invalid @enderror form-control"/>

                                        <x-validation-message name="tujuan_id" />
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="target_id">Pilih Target</label>
                                        {{-- <select class="@error('target_id') is-invalid @enderror form-control" name="target_id" id="target">
                                            @foreach ($targets as $target)
                                                @if (old('target_id', $indikator->target_id == $target->id))
                                                    <option value="{{ $target->id }}" selected>{{ $target->kode_target }} {{ $target->deskripsi }}</option> 
                                                @else
                                                        <option value="{{ $target->id }}">{{ $target->kode_target }} {{ $target->deskripsi }}</option>   
                                                @endif
                                            @endforeach
                                        </select> --}}
                                          <input type="hidden" name="target_id" id="target_id" value="{{ $indikator->target_id }}"/>
                                        <input name="" id="target_id" value="{{ $indikator->target->kode_target }} {{ $indikator->target->deskripsi }}" readonly type="text" class="@error('target_id') is-invalid @enderror form-control"/>
                                        <x-validation-message name="target_id" />
                                    </div>
                                </div>

                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_indikator">Kode Indikator</label>
                                        <input type="hidden" name="indikator_id" value="{{ $indikator->id }}"/>
                                        <input name="kode_indikator" id="kode_indikator" value="{{ $indikator->kode_indikator }}" readonly type="text" class="@error('kode_indikator') is-invalid @enderror form-control" aria-describedby="kode_indikator"/>
                                        <x-validation-message name="kode_indikator" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deskripsi">Nama Indikator</label>
                                        <input name="deskripsi" id="deskripsi" value="{{ $indikator->deskripsi }}" readonly type="text" class="@error('deskripsi') is-invalid @enderror form-control" aria-describedby="nama_indikator"/>
                                        <x-validation-message name="deskripsi" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <input name="satuan" id="satuan" value="{{ $indikator->satuan }}" type="text" class="@error('satuan') is-invalid @enderror form-control" aria-describedby="satuan"/>
                                        <x-validation-message name="satuan" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_id">Pilih Sumber Data</label>
                                        <select class="@error('user_id') is-invalid @enderror form-control" name="user_id" id="user_id" required>
                                           <option value=""> Pilih Sumber Data</option> 
                                            @foreach ($users as $user)
                                                @if ($user->role_id == 2 || $user->role_id == 3)
                                                    @if (old('user_id', $indikator->user_id == $user->id))
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
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="inactive">inactive</option>      
                                        <option value="active">active</option>      
                                    </select>
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