@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Capaian TPB</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            
            <div class="card-header py-3">
                <span>Tambah Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/capaian" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tahun_id">Pilih Tahun</label>
                                        <select class="form-control" name="tahun_id" id="tahun_id">
                                            <option hidden value="">Pilih Tahun</option>
                                            @foreach ($tahuns as $tahun)
                                                <option value="{{ $tahun->id }}">{{ $tahun->tahun }}</option>                                           
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_id">Pilih Tujuan</label>
                                        <select class="form-control" name="tujuan_id" id="tujuan">
                                            <option value="">Pilih Tujuan</option>
                                            @foreach ($tujuans as $tujuan)
                                                <option value="{{ $tujuan->id }}">{{ $tujuan->kode_tujuan }} {{ $tujuan->name }}</option>                                           
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="target_id">Pilih Target</label>
                                        <select class="form-control" name="target_id" id="target">
                                            {{-- @foreach ($targets as $target)
                                                <option value="{{ $target->id }}">{{ $target->kode_target }} {{ $target->deskripsi }}</option>
                                            @endforeach --}}
                                            <option value="">Pilih Target</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="indikator_id">Pilih Indikator</label>
                                        <select class="form-control" name="indikator_id" id="indikator">
                                            {{-- @foreach ($indikators as $indikator)
                                                <option value="{{ $indikator->id }}">{{ $indikator->kode_indikator }} {{ $indikator->deskripsi }}</option>
                                            @endforeach --}}
                                            <option value="">Pilih Indikator</option>
                                        </select>
                                    </div>
                                </div>                            
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <input name="satuan" id="satuan" type="text" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="baseline">baseline</label>
                                        <input name="baseline" id="baseline" type="text" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="target_awal">Target Tahunan</label>
                                        <input name="target_awal" id="target_awal" type="text" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="capaian">Capaian</label>
                                        <input name="capaian" id="capaian" type="text" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Pilih Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="">Pilih Status</option>  
                                            <option value="Tercapai">Tercapai</option>  
                                            <option value="Akan Tercapai">Akan Tercapai</option>  
                                            <option value="Perlu Perhatian Khusus">Perlu Perhatian Khusus</option>  
                                        </select>
                                    </div>
                                </div>    

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sumber_data">Pilih Sumber Data</label>
                                        @if (Auth::user()->role_id == 2)
                                            <select class="form-control" name="user_id" id="status">
                                                <option >Pilih Sumber Data</option>  
                                                @foreach ($users as $user)
                                                    @if ($user->role_id == 3 )
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>                                               
                                                    @endif
                                                @endforeach
                                            </select>
                                            {{-- <input name="sumber_data" id="sumber_data" type="text" class="form-control"/> --}}
                                        @else
                                            <input name="sumber_data" id="sumber_data" type="text" readonly value="{{ Auth::user()->name }}" class="form-control"/>
                                        @endif
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

    {{-- AJAX CDN --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tujuan').change(function(){
            let id = $(this).val();
            $('select[name="target_id"]').empty();
           $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
           });
        //call country on region selected
            $.ajax({
                dataType: 'json',
                url: "/getTarget/"+id,
                type: "GET",
                success: function (data) {
                    console.log(data);
                    $('select[name="target_id"]').empty();
                    $.each(data, function(key,data){
                      $('select[name="target_id"]').append('<option value="'+ data.id +'">'+ data.kode_target + ' '+ data.deskripsi +'</option>');
                });
                },
               error: function(error) {
                    console.log(error);
               }
            });
        });
    //call city on country selected
        $('#target').change(function(){
            let id = $(this).val();
            $.ajax({
            dataType: 'json',
            url: "/getIndikator/"+id,
            type: "GET",
            success: function (data) {
                console.log(data);
                $('select[name="indikator_id"]').empty();
                $.each(data, function(key,data){
                    $('select[name="indikator_id"]').append('<option value="'+ data.id +'">'+ data.kode_indikator + ' ' +data.deskripsi +'</option>');
            });
            },
            error: function(error) {
                console.log(error);
            }
            });
        });
    });
</script>

@endsection