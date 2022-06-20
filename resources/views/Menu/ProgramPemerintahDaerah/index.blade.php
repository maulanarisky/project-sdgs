@extends('Menu.layouts.main')
@section('container')

  <div class="container-fluid">
    
    <h1 class="h3 mb-3 text-gray-800 text-center">Realisasi Program, Kegiatan dan Anggaran Program Pemerintah Daerah</h1>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <select class="float-right btn btn-success dropdown-toggle" name="tahun_id" onchange="location = this.value;">
          <option value="">-- Pilih Tahun --</option>
          @foreach ($tahuns as $tahun)
          <option value="/menu/pemda/{{ $tahun->id }}">{{ $tahun->tahun }}</option>
          @endforeach
        </select>  

        <a class="mr-3 float-right btn btn-warning">{{ $tahunSinggle->tahun }}</a>

        @if (Auth::user()->role_id == 1) 
          <a href="#" class="btn btn-success">Excel</a>
          <a href="#" class="btn btn-danger">PDF</a>
        @else
          <a href="/menu/pemda/create" class="btn btn-success">Tambah Data</a>
        @endif
      </div>

    <div class="card-body">

      <x-auth-session-status class="mb-4" :status="session('status')" />

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th rowspan="2" colspan="4"style="vertical-align: middle" > Indikator | Program | Kegiatan | Sub Kegiatan</th>  
              <th rowspan="2" style="vertical-align: middle"> Satuan </th>                        
              <th rowspan="2" style="vertical-align: middle"> Target Tahun {{ $tahunSinggle->tahun }} </th>
              <th colspan="2">Realisasi Target Tahun{{ $tahunSinggle->tahun }}</th>
              <th rowspan="2" style="vertical-align: middle"> Alokasi Anggaran Tahun {{ $tahunSinggle->tahun }}</th>
              <th colspan="2"> Realisasi Anggaran Tahun{{ $tahunSinggle->tahun }}</th>
              <th rowspan="2" style="vertical-align: middle"> Lokasi Aktual Pelaksanaan Kegiatan</th>
              <th rowspan="2" style="vertical-align: middle"> Sumber Pendanaan</th>
              <th rowspan="2" style="vertical-align: middle"> Instansi Pelaksanaan </th>
              @if (Auth::user()->role_id != 1)
                <th rowspan="2" style="vertical-align: middle">Aksi</th>                  
              @endif
            </tr>
            <tr class="text-center">
              <th>Sem 1</th>
              <th>Sem 2</th>
              <th>Sem 1</th>
              <th>Sem 2</th>
            </tr>
          </thead>
          <tbody id="myTable">
            @foreach ($program_pemerintah_daerahs as $pemda)
              @if ($pemda->user->id == Auth::user()->id  && $pemda->tahun_id ==  $tahunSinggle->id)
                <tr>                       
                  <td style="vertical-align: middle">{{ $pemda->kegiatan->program->indikator->kode_indikator }}</td>
                  <td style="vertical-align: middle">{{ $pemda->kegiatan->program->name_program }}</td>
                  <td style="vertical-align: middle">{{ $pemda->kegiatan->name_kegiatan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->name_subkegiatan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->satuan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->target_tahun }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_1 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_2 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->alokasi_anggaran }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_1 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_2 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->sumber_pendanaan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->lokasi_pelaksanaan_kegiatan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->user->name }}</td>

                  <td align="center" style="width: 8rem">
                    
                    <a href="/menu/pemda/{{ $pemda->id }}/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
                    
                    <form action="/menu/pemda/{{ $pemda->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapur tujuan : {{ $pemda->name_subkegiatan }} ?')">
                        <i class="fas fa-fw fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @elseif(Auth::user()->role_id == 1 && $pemda->tahun_id ==  $tahunSinggle->id)
              <tr>                       
                <td style="vertical-align: middle">{{ $pemda->kegiatan->program->indikator->kode_indikator }}</td>
                <td style="vertical-align: middle">{{ $pemda->kegiatan->program->name_program }}</td>
                <td style="vertical-align: middle">{{ $pemda->kegiatan->name_kegiatan }}</td>
                <td style="vertical-align: middle">{{ $pemda->name_subkegiatan }}</td>
                <td style="vertical-align: middle">{{ $pemda->satuan }}</td>
                <td style="vertical-align: middle">{{ $pemda->target_tahun }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pemda->alokasi_anggaran }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pemda->sumber_pendanaan }}</td>
                <td style="vertical-align: middle">{{ $pemda->lokasi_pelaksanaan_kegiatan }}</td>
                <td style="vertical-align: middle">{{ $pemda->user->name }}</td>
              </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection