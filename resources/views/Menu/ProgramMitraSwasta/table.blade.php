<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr class="text-center">
        <th rowspan="2" colspan="4"style="vertical-align: middle" > Indikator | Program | Kegiatan | Output Kegiatan</th>
        <th rowspan="2" style="vertical-align: middle"> Satuan </th>  
        <th rowspan="2" style="vertical-align: middle"> Target Tahun {{ $tahunSinggle->name }}</th>
        <th colspan="2">Realisasi Target Tahun {{ $tahunSinggle->name }}</th>
        <th rowspan="2" style="vertical-align: middle"> Alokasi Anggaran Tahun {{ $tahunSinggle->name }} (RP Juta)</th>
        <th colspan="2">Realisasi Anggaran Tahun {{ $tahunSinggle->name }} (RP Juta)</th>
        <th rowspan="2" style="vertical-align: middle"> Lokasi Aktual Pelaksanaan Kegiatan</th>
        <th rowspan="2" style="vertical-align: middle"> Sumber Pendanaan</th>
        <th rowspan="2" style="vertical-align: middle"> Lembaga Pelaksanaan</th>
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
      @foreach ($output_kegiatans as $output_kegiatan)
        @if ($output_kegiatan->user->id == Auth::user()->id && $output_kegiatan->tahun_id ==  $tahunSinggle->id)
          <tr align="center">
            <td style="vertical-align: middle">{{ $output_kegiatan->indikator->kode_indikator}}. {{ $output_kegiatan->indikator->deskripsi}}</td>  
            <td style="vertical-align: middle">{{ $output_kegiatan->kegiatan->program->name_program}}.{{ $output_kegiatan->kegiatan->program->name_program}}</td>  
            <td style="vertical-align: middle">{{ $output_kegiatan->kegiatan->name_kegiatan }}</td>  
            <td style="vertical-align: middle">{{ $output_kegiatan->name_outputkegiatan }}</td> 
            <td style="vertical-align: middle">{{ $output_kegiatan->satuan }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->target_tahun }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_target_sem_1 }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_target_sem_2 }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->alokasi_anggaran }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_anggaran_sem_1 }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_anggaran_sem_2 }}</td>    
            <td style="vertical-align: middle">{{ $output_kegiatan->lokasi_pelaksanaan_kegiatan }}</td> 
            <td style="vertical-align: middle">{{ $output_kegiatan->sumber_pendanaan }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->user->name }}</td>

            <td style="vertical-align: middle">
              <a href="/menu/mitraswasta/{{ $output_kegiatan->id }}/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
              <form action="/menu/mitraswasta/{{ $output_kegiatan->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapus output kegiatan : {{ $output_kegiatan->name_outputkegiatan }} ?')">
              <i class="fas fa-fw fa-trash"></i>
              </button>
              </form>
            </td>                
          </tr>
        @elseif(Auth::user()->role_id == 1 && $output_kegiatan->tahun_id ==  $tahunSinggle->id)
          <tr align="center">
            <td style="vertical-align: middle">{{ $output_kegiatan->indikator->kode_indikator}}. {{ $output_kegiatan->indikator->deskripsi}}</td>  
            <td style="vertical-align: middle">{{ $output_kegiatan->kegiatan->program->name_program}}.{{ $output_kegiatan->kegiatan->program->name_program}}</td>  
            <td style="vertical-align: middle">{{ $output_kegiatan->kegiatan->name_kegiatan }}</td>  
            <td style="vertical-align: middle">{{ $output_kegiatan->name_outputkegiatan }}</td> 
            <td style="vertical-align: middle">{{ $output_kegiatan->satuan }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->target_tahun }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_target_sem_1 }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_target_sem_2 }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->alokasi_anggaran }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_anggaran_sem_1 }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->realisasi_anggaran_sem_2 }}</td>    
            <td style="vertical-align: middle">{{ $output_kegiatan->lokasi_pelaksanaan_kegiatan }}</td> 
            <td style="vertical-align: middle">{{ $output_kegiatan->sumber_pendanaan }}</td>
            <td style="vertical-align: middle">{{ $output_kegiatan->user->name }}</td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>