@extends('Menu.layouts.main')
@section('container')

 <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pengaturan Akun</h1>
            <p class="mb-4">Ubah Kata Sandi</p>


            <!-- Input pengaturan sandi pengguna -->
            <div class="card shadow mb-4 border-left-danger">
              <div class="card-header py-3">
                <span>Pengaturan Kata Sandi</span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <form action="/menu/setting/{{ $setting->id }} }}" method="post">
                        @method('patch')
                        @csrf

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password" >Kata Sandi Saat ini</label>
                            <input type="text" name="current-password" class="form-control" id="password" value="" />
                          </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="hidden" value="{{ Auth::user()->role_id }}" name="role_id">
                            <label for="password" >Masukkan Kata Sandi Baru</label >
                            <input type="password"class="form-control"  name="password" id="password_baru" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password_confirmation"
                              >Konfirmasi Kata Sandi Baru</label>
                            <input type="password"class="form-control" name="password_confirmation" id="password_confirmation"/>
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
            </div>
          </div>
          <!-- /.container-fluid -->
    
@endsection