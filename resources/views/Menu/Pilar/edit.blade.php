@extends('Menu.layouts.main')
@section('container')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pilar</h1>
        <p class="mb-4">Ubah Data</p>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/pilar/{{ $pilar->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input name="id" id="id" type="number" value="{{ $pilar->id }}" readonly class="@error('name') is-invalid @enderror form-control" aria-describedby="kode"/>
                                        <x-validation-message name="id" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">nama</label>
                                        <input name="name" id="name" type="text" value="{{ $pilar->name }}" class="@error('name') is-invalid @enderror form-control" aria-describedby="name"/>
                                        <x-validation-message name="name" />
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
@endsection
