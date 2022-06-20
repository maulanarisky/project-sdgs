@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800 text-center">Pelaporan Pembelajaran</h1>

        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Tambah Data</span>
            </div>
            <div class="card-body">
                      
                <form method="post" action="/menu/pp" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                <label for="name_file">Nama File</label>
                                <input type="text" name="name_file"class="form-control @error('name_file') is-invalid @enderror" id="name_file" autofocus placeholder=" ex: Pelaporan Pembelajaran {{ Auth::user()->name }}"/>
                                <x-validation-message name="nama_file" />
                            </div>
                        </div>
                    
                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="deskripsi" id="task-textarea" cols="150" rows="10">
                                    <p>1. Nama Tujuan TPB/SDGs      :</p>
                                    <p>2. Nama Institusi            :</p>
                                    <p>3. Nama Program              :</p>
                                    <p>4. Lokasi dan Waktu Kegiatan :</p>
                                    <p>5. Latar Belakang            :</p>
                                    <p>6. Proses Pelaksanaan (strategi, pihak terlibat, penerima manfaat, dll)  :</p>
                                    <p>7. Hasil dan Dampak          :</p>
                                    <p>8. Tantangan dan Pembelajaran:</p>
                                    <p>9. Peluang replikasi         :</p>

                                </textarea>
                                <x-validation-message name="deskripsi" />
                            </div>
                        </div> --}}

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file" aria-describedby="file"/>
                            <x-validation-message name="file" />
                        </div>
                    </div>

                        <div class="row md-2">
                            <div class="col">
                                <button type="submit" class="btn btn-success px-5">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
                .create( document.querySelector( '#task-textarea' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
@endsection