@extends('Menu.layouts.main')
@section('container')

 <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Pengguna</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="/menu/user/create" class="btn btn-success">Tambah Data</a>
      <div class="card-body">
        
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr align="center">
                {{-- <th>No</th> --}}
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>No Whatsapp</th>
                <th>Role</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  @if ($user->role_id != 1)
                    {{-- <td>{{ $loop->iteration }}</td> --}}
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->no_wa }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->status }}</td>
                    <td align="center" style="width: 8rem">
                      <a href="/menu/user/{{ $user->id }}/edit" class="btn btn-warning">
                        <i class="fas fa-fw fa-pen-square"></i>
                      </a>
                      <form action="/menu/user/{{ $user->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapus pengguna : {{ $user->name }} ?')">
                            <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </form>
                    </td>
                  @endif
                </tr> 
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection