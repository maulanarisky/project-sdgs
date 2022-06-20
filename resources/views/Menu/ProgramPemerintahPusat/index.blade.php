@extends('Menu.layouts.main')
@section('container')

 <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Program {{ Auth::user()->name }}</h1>
            <p class="mb-4">Detail</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-9">
                    <a
                      href="/menu/pusat/create"
                      class="btn btn-success"
                      >Tambah Data</a
                    >
                  </div>
                  <div class="col"></div>
                </div>
              </div>
              <div class="card-body">
                 @if (session()->has('success'))
                      <div class="alert alert-success col-lg-12" role="alert">
                        {!! session('success')  !!}
                      </div> 
                  @endif
                <div class="table-responsive">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                      <tr class="text-center">
                        <th rowspan="2" style="vertical-align: middle">
                          Tahun
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Tujuan
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Kode Indikator
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Kode Program
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Kode Kegiatan
                        </th>
                         <th rowspan="2" style="vertical-align: middle">
                          Nama Kegiatan
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Kode Rincian Output
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Nama Rincian Output
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Satuan
                        </th>                        
                        <th rowspan="2" style="vertical-align: middle">
                          Target Tahun (n)
                        </th>
                        <th colspan="2">Realisasi Target Tahun (n)</th>
                        <th rowspan="2" style="vertical-align: middle">
                          Alokasi Anggaran Tahun (n)
                        </th>
                        <th colspan="2">Realisasi Anggaran Tahun (n)</th>
                        <th rowspan="2" style="vertical-align: middle">
                          Lokasi Aktual Pelaksanaan Kegiatan
                        </th>
                        <th rowspan="2" style="vertical-align: middle">
                          Instansi Pelaksanaan
                        </th>
                        <th rowspan="2" style="vertical-align: middle">Aksi</th>
                      </tr>
                      <tr class="text-center">
                        <th>Sem 1</th>
                        <th>Sem 2</th>
                        <th>Sem 1</th>
                        <th>Sem 2</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                       @foreach ($program_pemerintah_pusats as $pusat)
                        @if ($pusat->user->id == Auth::user()->id)
                        <tr>                       
                          <td>{{ $pusat->tahun->tahun }}</td>
                          <td>{{ $pusat->tujuan->name }}</td>
                          <td>{{ $pusat->indikator->kode_indikator }}</td>
                          <td>{{ $pusat->program->kode_program }}</td>
                          <td>{{ $pusat->kegiatan->kode_kegiatan }}</td>
                          <td>{{ $pusat->kegiatan->name_kegiatan }}</td>
                          <td>{{ $pusat->kode_rincianoutput }}</td>
                          <td>{{ $pusat->name_rincianoutput }}</td>
                          <td>{{ $pusat->satuan }}</td>
                          <td>{{ $pusat->target_tahun }}</td>
                          <td>{{ $pusat->realisasi_target_sem_1 }}</td>
                          <td>{{ $pusat->realisasi_target_sem_2 }}</td>
                          <td>{{ $pusat->alokasi_anggaran }}</td>
                          <td>{{ $pusat->realisasi_anggaran_sem_1 }}</td>
                          <td>{{ $pusat->realisasi_anggaran_sem_2 }}</td>
                          <td>{{ $pusat->lokasi_pelaksanaan_kegiatan }}</td>
                          <td>{{ $pusat->instansi_pelaksana }}</td>
                          
                          <td align="center" style="width: 8rem">
                            <a href="/menu/pusat/{{ $pusat->id }}/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
                           <form action="/menu/pusat/{{ $pusat->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapus Program : {{ $pusat->name_rincianoutput }} ?')">
                            <i class="fas fa-fw fa-trash"></i>
                            </button>
                            </form>
                          </td>
                        </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection