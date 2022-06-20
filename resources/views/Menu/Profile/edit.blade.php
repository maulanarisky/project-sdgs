@extends('Menu.layouts.main')
@section('container')

 <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pengaturan Akun</h1>
            <p class="mb-4">Lengkapi data diri anda.</p>

            <!-- Input Data pengguna -->
            <div class="card shadow mb-4 border-left-success">
              <div class="card-header py-3">
                <span>Profil Pengguna</span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <form action="/menu/profile/{{ $profile->id }}" method="post">
                        @method('patch')
                        @csrf
                      <div class="row">
                        <div class="col-md-6">
                        <input type="hidden" value="{{ Auth::user()->role_id }}" name="role_id">
                          <div class="form-group">
                            <label for="name">Nama Instansi</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="no_wa">No. Whatsapp</label>
                            <input type="number" name="no_wa" class="form-control" id="no_wa" value="{{ Auth::user()->no_wa }}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"  name="email" id="email" value="{{ Auth::user()->email }}" />
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
          <!-- /.container-fluid -->
    
@endsection