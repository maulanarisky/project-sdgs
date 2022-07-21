@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Indikator</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Tambah Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/indikator" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_id">Pilih Tujuan</label>
                                        <select class="@error('tujuan_id') is-invalid @enderror form-control" name="tujuan_id" id="tujuan">
                                            <option value="">Pilih Tujuan TPB/SDGs Terlebih Dahulu</option>   
                                            @foreach ($tujuans as $tujuan)
                                                <option style="text-transform: uppercase" value="{{ $tujuan->id }}">{{ $tujuan->id }}. {{ $tujuan->name }}</option>   
                                            @endforeach
                                        </select>
                                        <x-validation-message name="tujuan_id" />
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="target_id">Pilih Target</label>
                                        <select class="@error('target_id') is-invalid @enderror form-control" name="target_id" id="target">
                                        </select>
                                        <x-validation-message name="target_id" />
                                    </div>
                                </div>

                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_indikator">Kode Indikator</label>
                                        <input name="kode_indikator" id="kode_indikator" type="text" class="@error('kode_indikator') is-invalid @enderror form-control" aria-describedby="kode_indikator"/>
                                        <x-validation-message name="kode_indikator" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deskripsi">Nama Indikator</label>
                                        <input name="deskripsi" id="deskripsi" type="text" class="@error('deskripsi') is-invalid @enderror form-control" />
                                        <x-validation-message name="deskripsi" />
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