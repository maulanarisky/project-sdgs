 <table class="table table-bordered" id="example" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th rowspan="2" style="vertical-align: middle" > Tujuan </th>  
              <th rowspan="2" style="vertical-align: middle" > Indikator </th>  
              <th rowspan="2" style="vertical-align: middle" >  Program</th>  
              <th rowspan="2" style="vertical-align: middle" >  Kegiatan </th>  
              <th rowspan="2" style="vertical-align: middle" > Sub Kegiatan</th>  
              <th rowspan="2" style="vertical-align: middle"> Satuan </th>                        
              <th rowspan="2" style="vertical-align: middle"> Tahun </th>                        
              <th rowspan="2" style="vertical-align: middle"> Target Tahun {{ $tahunSinggle->name }} </th>
              <th colspan="2">Realisasi Target Tahun {{ $tahunSinggle->name }}</th>
              <th rowspan="2" style="vertical-align: middle"> Alokasi Anggaran Tahun {{ $tahunSinggle->name }}</th>
              <th colspan="2"> Realisasi Anggaran Tahun {{ $tahunSinggle->name }}</th>
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
                  <td style="vertical-align: middle">{{ $pemda->subkegiatan->indikator->target->tujuan->kode_tujuan }}.{{ $pemda->subkegiatan->indikator->target->tujuan->name }}</td>
                  <td style="vertical-align: middle">{{ $pemda->subkegiatan->indikator->kode_indikator }}.{{ $pemda->subkegiatan->indikator->deskripsi }}</td>
                  <td style="vertical-align: middle">{{ $pemda->SubKegiatan->program }}</td>
                  <td style="vertical-align: middle">{{ $pemda->SubKegiatan->kegiatan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->SubKegiatan->name_sub_kegiatan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->tahun->name }}</td>
                  <td style="vertical-align: middle">{{ $pemda->SubKegiatan->satuan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->target_tahun }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_1 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_2 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->alokasi_anggaran }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_1 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_2 }}</td>
                  <td style="vertical-align: middle">{{ $pemda->lokasi_pelaksanaan_kegiatan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->sumber_pendanaan }}</td>
                  <td style="vertical-align: middle">{{ $pemda->user->name }}</td>

                  <td align="center" style="width: 8rem">
                    
                    <a href="/menu/pemda/{{ $pemda->id }}/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
                    
                    {{-- <form action="/menu/pemda/{{ $pemda->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapur tujuan : {{ $pemda->name_subkegiatan }} ?')">
                        <i class="fas fa-fw fa-trash"></i>
                      </button>
                    </form> --}}
                  </td>
                </tr>
              @elseif(Auth::user()->role_id == 1 && $pemda->tahun_id ==  $tahunSinggle->id)
              <tr>                       
                <td style="vertical-align: middle">{{ $pemda->subkegiatan->indikator->target->tujuan->kode_tujuan }}.{{ $pemda->subkegiatan->indikator->target->tujuan->name }}</td>
                <td style="vertical-align: middle">{{ $pemda->subkegiatan->indikator->kode_indikator }}.{{ $pemda->subkegiatan->indikator->deskripsi }}</td>
              
                <td style="vertical-align: middle">{{ $pemda->subkegiatan->program }}</td>
                <td style="vertical-align: middle">{{ $pemda->subkegiatan->kegiatan }}</td>
                <td style="vertical-align: middle">{{ $pemda->subkegiatan->name_sub_kegiatan }}</td>
                <td style="vertical-align: middle">{{ $pemda->subkegiatan->satuan }}</td>
                
                <td style="vertical-align: middle">{{ $pemda->tahun->name }}</td>
                <td style="vertical-align: middle">{{ $pemda->target_tahun }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_target_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pemda->alokasi_anggaran }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pemda->realisasi_anggaran_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pemda->lokasi_pelaksanaan_kegiatan }}</td>
                <td style="vertical-align: middle">{{ $pemda->sumber_pendanaan }}</td>
                <td style="vertical-align: middle">{{ $pemda->user->name }}</td>
              </tr>
              @endif
            @endforeach
          </tbody>
        </table>