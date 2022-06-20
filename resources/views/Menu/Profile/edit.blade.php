@extends('Menu.layouts.main')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800 text-center">Profil</h1>

  <div class="card shadow mb-4 border-left-success">
    <div class="card-header py-3">
      <span>Profile Pengguna</span>
    </div>
    <div class="card-body">
      
      <x-auth-session-status class="mb-4" :status="session('status')" />
      
      <form action="/menu/profile/{{ $profile->id }}" method="post">
        @method('patch')
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Nama Instansi</label>
              <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" value="{{ Auth::user()->name }}" />
              <x-validation-message name="name" />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="no_wa">No. Whatsapp</label>
              <input type="number" name="no_wa" class="@error('no_we') is-invalid @enderror form-control" value="{{ Auth::user()->no_wa }}" />
              <x-validation-message name="no_wa" />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="@error('email') is-invalid @enderror form-control"  name="email" value="{{ Auth::user()->email }}" />
              <x-validation-message name="email" />
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
@endsection