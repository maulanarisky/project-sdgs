@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Pengaturan Kata Sandi</h1>

      <div class="card shadow mb-4 border-left-danger">
        <div class="card-header py-3">
          <span>Ubah Kata Sandi</span>
        </div>
        <div class="card-body">

          <x-auth-session-status class="mb-4" :status="session('status')" />
          
          <form action="/menu/setting/{{ $setting->id }} }}" method="post">
            @method('patch')
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="password" >Kata Sandi Saat ini</label>
                  <input type="text" name="current-password" class="@error('current-password') is-invalid @enderror form-control" />
                  <x-validation-message name="current-password" />
                </div>
              </div>

              <div class="col-md-6"></div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="password" >Masukkan Kata Sandi Baru</label >
                  <input type="password"class="@error('password') is-invalid @enderror form-control"  name="password" />
                  <x-validation-message name="password" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
                  <input type="password"class="@error('password_confirmation') is-invalid @enderror form-control" name="password_confirmation"/>
                  <x-validation-message name="password_confirmation" />
                </div>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col">
                <button type="submit" class="btn btn-danger px-5">
                  Simpan
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
@endsection