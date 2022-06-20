@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Data </h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form method="post" action="/menu/tujuan" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">     
                                    <div class="form-group">
                                        <label for="pilar_id">Pilih Pilar</label>
                                        <select class="@error('pilar_id') is-invalid @enderror form-control" name="pilar_id" id="pilar_id">
                                            @foreach ($pilars as $pilar)
                                                <option value="{{ $pilar->id }}">{{ $pilar->name }}</option>   
                                            @endforeach
                                        </select>
                                        <x-validation-message name="pilar_id" />
                                      </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_tujuan">Kode Tujuan</label>
                                        <input name="kode_tujuan" id="kode_tujuan" type="number" readonly value="{{ $tujuan->kode_tujuan + 1 }}" class="@error('kode_tujuan') is-invalid @enderror form-control" aria-describedby="" required/>
                                        <x-validation-message name="kode_tujuan" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Tujuan</label>
                                        <input name="name" id="name" type="text" class="@error('name') is-invalid @enderror form-control" aria-describedby="name"/>
                                        <x-validation-message name="name" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Tujuan</label>
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="4"class="@error('deskripsi') is-invalid @enderror form-control"></textarea>
                                        <x-validation-message name="deskripsi" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- <label for="img">Gambar</label> --}}
                                        <img class="img-preview" style="width:150px; height:150px;">
                                        <input name="img" id="img"  onchange="previewImage ()" type="file" class="@error('img') is-invalid @enderror form-control"/>
                                        <x-validation-message name="img" />
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