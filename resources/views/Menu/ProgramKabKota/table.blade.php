 <table class="table table-bordered" id="example" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th rowspan="2" style="vertical-align: middle" > Tujuan</th>  
              <th rowspan="2" style="vertical-align: middle" > Indikator</th>  
              <th rowspan="2" style="vertical-align: middle" >  Program </th>  
              <th rowspan="2" style="vertical-align: middle" > Kegiatan </th>  
              <th rowspan="2" style="vertical-align: middle" > Sub Kegiatan</th>  
              <th rowspan="2" style="vertical-align: middle"> Tahun </th>                        
              <th rowspan="2" style="vertical-align: middle"> Satuan </th>                        
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
            @foreach ($program_kab_kotas as $pkk)
              @if ($pkk->user->id == Auth::user()->id  && $pkk->tahun_id ==  $tahunSinggle->id)
                <tr>
                  @if ($pkk->indikator_id != '')
                  <td style="vertical-align: middle">{{ $pkk->indikator->tujuan->kode_tujuan }}.{{ $pkk->indikator->tujuan->name }}</td>
                  <td style="vertical-align: middle">{{ $pkk->indikator->kode_indikator }}.{{ $pkk->indikator->deskripsi }}</td>
                  @elseif($pkk->indikator_id == '')
                  <td></td>
                  <td></td>
                  @endif

                  <td style="vertical-align: middle">{{ $pkk->Kabkota->program_kabkota}}</td>
                  <td style="vertical-align: middle">{{ $pkk->Kabkota->kegiatan_kabkota }}</td>
                  <td style="vertical-align: middle">{{ $pkk->Kabkota->kode_subkegiatan_kabkota }}.{{ $pkk->Kabkota->name_subkegiatan_kabkota }}</td>
                  <td style="vertical-align: middle">{{ $pkk->tahun->name }}</td>
                  <td style="vertical-align: middle">{{ $pkk->Kabkota->satuan }}</td>
                  <td style="vertical-align: middle">{{ $pkk->target_tahun }}</td>
                  <td style="vertical-align: middle">{{ $pkk->realisasi_target_sem_1 }}</td>
                  <td style="vertical-align: middle">{{ $pkk->realisasi_target_sem_2 }}</td>
                  <td style="vertical-align: middle">{{ $pkk->alokasi_anggaran }}</td>
                  <td style="vertical-align: middle">{{ $pkk->realisasi_anggaran_sem_1 }}</td>
                  <td style="vertical-align: middle">{{ $pkk->realisasi_anggaran_sem_2 }}</td>
                  <td style="vertical-align: middle">{{ $pkk->lokasi_pelaksanaan_kegiatan }}</td>
                  <td style="vertical-align: middle">{{ $pkk->sumber_pendanaan }}</td>
                  <td style="vertical-align: middle">{{ $pkk->user->name }}</td>
                  <td align="center" style="width: 8rem">
                    <a href="/menu/pkabkota/{{ $pkk->id }}/edit" class="btn btn-warning" ><i class="fas fa-fw fa-pen-square"></i></a> 
                     <form action="/menu/pkabkota/{{ $pkk->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapus Program Kab/Kota : {{ $pkk->Kabkota->program_kabkota }} ?')">
                            <i class="fas fa-fw fa-trash"></i>
                        </button>
                    </form>
                  </td>
                </tr>
              @elseif(Auth::user()->role_id == 1 && $pkk->tahun_id ==  $tahunSinggle->id)
              <tr>                       
              
                 @if ($pkk->indikator_id != '')
                  <td style="vertical-align: middle">{{ $pkk->indikator->tujuan->kode_tujuan }}.{{ $pkk->indikator->tujuan->name }}</td>
                  <td style="vertical-align: middle">{{ $pkk->indikator->kode_indikator }}.{{ $pkk->indikator->deskripsi }}</td>
                  @elseif($pkk->indikator_id == '')
                  <td></td>
                  <td></td>
                @endif
                
                <td style="vertical-align: middle">{{ $pkk->Kabkota->program_kabkota }}</td>
                <td style="vertical-align: middle">{{ $pkk->Kabkota->kegiatan_kabkota }}</td>
                <td style="vertical-align: middle">{{ $pkk->Kabkota->kode_subkegiatan_kabkota }}.{{ $pkk->Kabkota->name_subkegiatan_kabkota }}</td>
                <td style="vertical-align: middle">{{ $pkk->tahun->name }}</td>
                <td style="vertical-align: middle">{{ $pkk->Kabkota->satuan }}</td>
                <td style="vertical-align: middle">{{ $pkk->target_tahun }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_target_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_target_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pkk->alokasi_anggaran }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_anggaran_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_anggaran_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pkk->lokasi_pelaksanaan_kegiatan }}</td>
                <td style="vertical-align: middle">{{ $pkk->sumber_pendanaan }}</td>
                <td style="vertical-align: middle">{{ $pkk->user->name }}</td>
              </tr>
              @elseif(Auth::user()->role_id == 7 && $pkk->tahun_id ==  $tahunSinggle->id)
              @if ($pkk->indikator->tujuan->user_id == Auth::user()->id)
                  
              <tr>           
                @if ($pkk->indikator_id != '')
                <td style="vertical-align: middle">{{ $pkk->indikator->tujuan->kode_tujuan }}.{{ $pkk->indikator->tujuan->name }}</td>
                  <td style="vertical-align: middle">{{ $pkk->indikator->kode_indikator }}.{{ $pkk->indikator->deskripsi }}</td>
                  @elseif($pkk->indikator_id == '')
                  <td></td>
                  <td></td>
                @endif
                
                <td style="vertical-align: middle">{{ $pkk->Kabkota->program_kabkota }}</td>
                <td style="vertical-align: middle">{{ $pkk->Kabkota->kegiatan_kabkota }}</td>
                <td style="vertical-align: middle">{{ $pkk->Kabkota->kode_subkegiatan_kabkota }}.{{ $pkk->Kabkota->name_subkegiatan_kabkota }}</td>
                <td style="vertical-align: middle">{{ $pkk->tahun->name }}</td>
                <td style="vertical-align: middle">{{ $pkk->Kabkota->satuan }}</td>
                <td style="vertical-align: middle">{{ $pkk->target_tahun }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_target_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_target_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pkk->alokasi_anggaran }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_anggaran_sem_1 }}</td>
                <td style="vertical-align: middle">{{ $pkk->realisasi_anggaran_sem_2 }}</td>
                <td style="vertical-align: middle">{{ $pkk->lokasi_pelaksanaan_kegiatan }}</td>
                <td style="vertical-align: middle">{{ $pkk->sumber_pendanaan }}</td>
                <td style="vertical-align: middle">{{ $pkk->user->name }}</td>
              </tr>
              @endif
              @endif
            @endforeach
          </tbody>
        </table>