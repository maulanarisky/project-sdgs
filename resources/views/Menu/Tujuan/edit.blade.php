@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ubah Data</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form method="post" action="/menu/tujuan/{{ $tujuan->id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">     
                                    <div class="form-group">
                                        <label for="pilar_id">Pilih Pilar</label>
                                        <select class="@error('pilar_id') is-invalid @enderror form-control" name="pilar_id" id="pilar_id">
                                            @foreach ($pilars as $pilar)
                                                @if (old('pilar_id', $tujuan->pilar_id == $pilar->id))
                                                    <option value="{{ $pilar->id }}" selected>{{ $pilar->name }}</option> 
                                                @else
                                                    <option style="text-transform: uppercase" value="{{ $pilar->id }}">{{ $pilar->name }}</option>   
                                                @endif
                                            @endforeach
                                        </select>
                                        <x-validation-message name="pilar_id" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_tujuan">Kode Tujuan</label>
                                        <input name="kode_tujuan" id="kode_tujuan" type="number" value="{{ $tujuan->kode_tujuan }}" class="@error('kode_tujuan') is-invalid @enderror form-control" readonly required/>
                                        <x-validation-message name="kode_tujuan" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Tujuan</label>
                                        <input name="name" id="name" type="text" value="{{ $tujuan->name }}" class="@error('name') is-invalid @enderror form-control" aria-describedby="name" required/>
                                        <x-validation-message name="name" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Tujuan</label>
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="4"class="@error('deskripsi') is-invalid @enderror form-control">{{ $tujuan->deskripsi }}
                                        </textarea>
                                        <x-validation-message name="deskripsi" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="oldImage" value="{{ $tujuan->img }}">
                                        @if ($tujuan->img)
                                            <img src="{{ asset('storage/' . $tujuan->img) }}" class="img-preview" style="width:150px; height:150px;">
                                        @else
                                            <img class="img-preview" style="width:150px; height:150px;">
                                        @endif
                                        <input type="file" name="img" id="img" multiple onchange="previewImage()" class="@error('img') is-invalid @enderror form-control"/>
                                        <x-validation-message name="img" />
                                    </div>
                                </div>
                                <div class="col-md-6">     
                                    <div class="form-group">
                                        <label for="user_id">Pilih Sumber Data</label>
                                        <select class="@error('user_id') is-invalid @enderror form-control" name="user_id" id="user_id">
                                            <option value="">Pilih Sumber Data</option> 
                                            @foreach ($users as $user)
                                                @if (old('user_id', $tujuan->user_id == $user->id))
                                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option> 
                                                @else
                                                    <option style="text-transform: uppercase" value="{{ $user->id }}">{{ $user->name }}</option>   
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

    <script>
        function previewImage(){
            const image = document.querySelector('#img');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection