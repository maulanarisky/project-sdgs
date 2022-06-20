@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pelaporan Pembelajaran</h1>
        <p class="mb-4">Ubah Data</p>

        <div class="card shadow mb-4 border-left-success" >
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                      
                        <form method="post" action="/menu/pp/{{ $pp->id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                        <label for="name_file">Nama File</label>
                                        <input type="text" name="name_file"class="form-control @error('name_file') is-invalid @enderror" id="name_file" aria-describedby="name_file" value="{{ $pp->name_file }}"/>
                                        @error('name_file')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="hidden" name="oldFile" value="{{ $pp->file }}">
                                            <label for="file">File</label>
                                            <input type="file" name="file" id="file"value="{{asset('storage/' . $pp->file) }}" class="form-control @error('file') is-invalid @enderror"  aria-describedby=""/>
                                            @error('file')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
        function previewFile(){
            const file = document.querySelector('#file');
            const filePreview = document.querySelector('.file-preview');

            filePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(file.files[0]);

            oFReader.onload = function(oFREvent){
                filePreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection