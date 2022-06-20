@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tentukan SKPD yang akan mengisi</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/skpd/{{ $indikator->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="row">   
                                <input type="hidden" name="t">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_tujuan">Kode Tujuan</label>
                                        <input name="kode_tujuan" id="kode_tujuan" value="{{ $indikator->tujuan->kode_tujuan }}" readonly type="text" class="@error('kode_tujuan') is-invalid @enderror form-control" aria-describedby="kode_indikator"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_target">Kode Target</label>
                                        <input name="kode_target" id="kode_target" value="{{ $indikator->target->kode_target }}" readonly type="text" class="@error('kode_target') is-invalid @enderror form-control" aria-describedby="kode_indikator"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_indikator">Kode Indikator</label>
                                        <input name="kode_indikator" id="kode_indikator" value="{{ $indikator->kode_indikator }}" type="text" readonly class="@error('kode_indikator') is-invalid @enderror form-control" aria-describedby="kode_indikator"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deskripsi">Nama Indikator</label>
                                        <input name="deskripsi" id="deskripsi" value="{{ $indikator->deskripsi }}" type="text" readonly class="@error('deskripsi') is-invalid @enderror form-control" aria-describedby="nama_indikator"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_id">Hanya SKPD yang sudah melakukan registrasi yang akan tampil</label>
                                        <select class="@error('user_id') is-invalid @enderror form-control" name="user_id" id="status">
                                            <option value="">Pilih Sumber Data</option>  
                                            @foreach ($users as $user)
                                                @if ($user->role_id == 3 )
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>                                               
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
    </script>

@endsection