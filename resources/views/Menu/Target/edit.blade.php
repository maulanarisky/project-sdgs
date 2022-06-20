@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Target</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success">
            <div class="card-header py-3">
                <span>Ubah Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        <form action="/menu/target/{{ $target->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_id">Pilih Tujuan</label>
                                        <select class="@error('tujuan_id') is-invalid @enderror form-control" name="tujuan_id" id="tujuan_id">
                                            @foreach ($tujuans as $tujuan)
                                                @if (old('tujuan_id', $target->tujuan_id == $tujuan->id))
                                                    <option value="{{ $tujuan->id }}" selected>{{ $tujuan->name }}</option> 
                                                @else
                                                    <option style="text-transform: uppercase" value="{{ $tujuan->id }}">{{ $tujuan->name }}</option>   
                                                @endif
                                            @endforeach
                                        </select>
                                        <x-validation-message name="tujuan_id" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_target">Kode Target</label>
                                        <input name="kode_target" id="kode_target" value="{{ $target->kode_target }}" type="text" class="@error('kode_target') is-invalid @enderror form-control" aria-describedby="kode_target"/>
                                        <x-validation-message name="kode_target" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Target</label>
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="4" class="@error('deskripsi') is-invalid @enderror  form-control">{{ $target->deskripsi }}</textarea>
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

@endsection