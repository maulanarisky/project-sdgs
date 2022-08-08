@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Capaian TPB</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Edit Data</span>
            </div>
            <div class="card-body">

                <x-auth-session-status class="mb-4" :status="session('status')" />
                        
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/capaian/{{ $capaian->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tahun">Tahun Berjalan</label>
                                        <input name="tahun" id="tahun" value="{{ $capaian->tahun->name }}" readonly type="text" class="form-control"/>
                                    </div>  
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan">Tujuan TPB/SDGs</label>
                                        <input name="tujuan" id="tujuan" value="{{ $capaian->indikator->target->tujuan->name }}" readonly type="text" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="target">Target TPB/SDGs</label>
                                        <input name="target" id="target" value="{{ $capaian->indikator->target->kode_target }} {{ $capaian->indikator->target->deskripsi }}" readonly type="text" class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="indikator">Indikator TPB/SDGs</label>
                                        <input name="indikator" id="indikator" value="{{ $capaian->indikator->kode_indikator }} {{ $capaian->indikator->deskripsi }}" readonly type="text" class="form-control"/>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        @if (Auth::user()->role_id != 2)
                                            <input name="satuan" id="satuan" value="{{ $capaian->indikator->satuan }}" readonly type="text" class="@error('satuan') is-invalid @enderror form-control"/>
                                        @else
                                            <input name="satuan" id="satuan" value="{{ $capaian->indikator->satuan }}" readonly type="text" class="@error('satuan') is-invalid @enderror form-control"/>
                                        @endif
                                        <x-validation-message name="satuan" />
                                    </div>
                                </div>
                                

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="baseline">nilai baseline</label>
                                        <input name="baseline" id="baseline" value="{{ $capaian->baseline }}" type="text" class="@error('baseline') is-invalid @enderror form-control" autofocus/>
                                        <x-validation-message name="baseline" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="target_awal">Target Tahun {{ $capaian->tahun->name }}</label>
                                        <input name="target_awal" id="target_awal" value="{{ $capaian->target_awal }}" type="text" class="@error('target_awal') is-invalid @enderror form-control"/>
                                        <x-validation-message name="target_awal" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="capaian"">capaian tahun {{ $capaian->tahun->name }}</label>
                                        <input name="capaian" id="capaian" value="{{ $capaian->capaian }}" type="text" class="@error('capaian') is-invalid @enderror form-control"/>
                                        <x-validation-message name="capaian" />
                                    </div>
                                </div>   
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Pilih Status</label>
                                        <select class="@error('status') is-invalid @enderror form-control" name="status" id="status">
                                            <option value="">Pilih Status</option>
                                            <option value="tercapai" {{   $capaian->status === 'tercapai' ? 'selected' : '' }}>Tercapai</option>
                                            <option value="akan_tercapai" {{ $capaian->status === 'akan_tercapai' ? 'selected' : '' }}>Akan tercapai</option>
                                            <option value="perlu_perhatian_kusus" {{ $capaian->status === 'perlu_perhatian_kusus' ? 'selected' : '' }}>Perlu Perhatian Khusus</option>
                                        </select>
                                        <x-validation-message name="status" />
                                    </div>
                                </div>    

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sumber_data">Sumber Data</label>
                                            <input name="sumber_data" id="sumber_data" type="text" readonly value="{{ Auth::user()->name }}" class="form-control"/>   
                                        <x-validation-message name="sumber_data" />
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
    {{-- <script>
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
                                    $('select[name="target_id"]').append('<option value="'+ target.id +'">' + target.kode_target + target.deskripsi+ '</option>');
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
    </script> --}}

@endsection