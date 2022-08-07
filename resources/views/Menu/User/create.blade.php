@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kelola Pengguna</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success">
            <div class="card-header py-3">
                <span>Tambah Pengguna</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                    <form action="/menu/user" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama Instansi atau lembaga</label>
                                    <input id="name" name="name" type="text" class="@error('name') is-invalid @enderror form-control" value="{{old('name')}}" aria-describedby="name"/>
                                    <x-validation-message name="name" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email untuk login</label>
                                    <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror  form-control" aria-describedby="email" value="{{ old('email') }}"/>
                                    <x-validation-message name="email" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_wa">No Whatsapp</label>
                                    <input type="number" id="no_wa" name="no_wa" class="@error('no_wa') is-invalid @enderror form-control" aria-describedby="no_wa" value="{{old('no_wa')}}"/>
                                    <x-validation-message name="no_wa" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role_id">Role</label>
                                    <select class="@error('role_id') is-invalid @enderror form-control" name="role_id" id="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>   
                                        @endforeach
                                    </select>
                                    <x-validation-message name="role_id" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input id="password" type="password" name="password" autocomplete="new-password" class="@error('password') is-invalid @enderror form-control"/>
                                    <x-validation-message name="password" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                                    <input id="password_confirmation" type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control"/>
                                    <x-validation-message name="password_confirmation" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="inactive">inactive</option>      
                                        <option value="active">active</option>      
                                    </select>
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