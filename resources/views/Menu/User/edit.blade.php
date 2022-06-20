@extends('Menu.layouts.main')
@section('container')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kelola Pengguna</h1>
        <p class="mb-4">Tambah Pengguna</p>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success">
            <div class="card-header py-3">
                <span>Tambah Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                    <form action="/menu/user/{{ $user->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama Pengguna</label>
                                    <input id="name" name="name" type="text" value="{{ $user->name }}" class="@error('name') is-invalid @enderror form-control" aria-describedby="name"/>
                                    <x-validation-message name="name" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="@error('email') is-invalid @enderror form-control" aria-describedby="email"/>
                                    <x-validation-message name="email" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_wa">No Whatsapp</label>
                                    <input type="number" id="no_wa" name="no_wa" value="{{ $user->no_wa }}" class="@error('no_wa') is-invalid @enderror form-control" aria-describedby="no_wa"/>
                                    <x-validation-message name="no_wa" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role_id">Role</label>
                                    <select class="@error('role_id') is-invalid @enderror form-control" name="role_id" id="role_id">
                                        @foreach ($roles as $role)
                                            @if (old('role_id', $user->role_id == $role->id))
                                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option> 
                                            @else
                                                <option style="text-transform: uppercase" value="{{ $role->id }}">{{ $role->name }}</option>   
                                            @endif
                                        @endforeach
                                    </select>
                                    <x-validation-message name="role_id" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="inactive" {{ old('status', $user->status) == 'inactive' ? 'selected' : '' }}>inactive</option>      
                                        <option value="active" {{ old('status', $user->status) == 'active' ? 'selected' : '' }}>active</option>      
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