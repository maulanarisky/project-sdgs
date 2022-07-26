<table class="table table-bordered" id="dataTable"  cellspacing="0">
    <thead>
        <tr align="center" valign="middle">
            <td >Kode Tujuan</td>
            <td >Target</td>
            <td >Indikator</td>
            <td>Sumber Data</td>
            <td >Satuan</td>
            <td >Baseline</td>
            <td >Tahun</td>
            <td>Target</td>
            <td>Capaian</td>
            <td>Status</td>
            @if (Auth::user()->role_id != 1) 
            <td>Aksi</td>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($capaians as $capaian)
            @if ($capaian->tahun_id == $tahunSinggle->id && $capaian->user->id == Auth::user()->id)
                    <tr align="center" >
                          <td>{{  $capaian->indikator->target->tujuan->kode_tujuan }}</td>
                        <td>{{ $capaian->indikator->target->kode_target }}.{{ $capaian->indikator->target->deskripsi }}</td>
                        <td>{{ $capaian->indikator->kode_indikator}}.{{ $capaian->indikator->deskripsi }}</td>
                        <td>{{ $capaian->user->name }}</td>
                        <td>{{ $capaian->indikator->satuan }}</td>
                        <td>{{ $capaian->baseline }}</td>
                        <td>{{ $capaian->tahun->name }}</td>
                        <td>{{ $capaian->target_awal }}</td>
                        <td>{{ $capaian->capaian }}</td>
                        
                        @if ($capaian->status == 'tercapai')
                            <td valign="middle">Tercapai</td> 
                        @elseif($capaian->status == 'akan_tercapai')
                            <td valign="middle">Akan Tercapai</td>
                        @elseif($capaian->status == 'perlu_perhatian_kusus')
                            <td valign="middle">Perlu <br> Perhatian Khusus</td>
                        @else
                            <td valign="middle"></td>
                        @endif

                        <td align="center">
                            <a href="/menu/capaian/{{ $capaian->id }}/edit" class="btn btn-warning mb-2"><i class="fas fa-fw fa-pen-square"></i></a>
                         
                        </td>
                    </tr>
                {{-- jika yg login superadmin --}}
                @elseif (Auth::user()->role_id == 1 && $capaian->tahun_id == $tahunSinggle->id)
                    <tr align="center" >
                        <td>{{  $capaian->indikator->target->tujuan->kode_tujuan }}</td>
                        <td>{{ $capaian->indikator->target->kode_target }}.{{ $capaian->indikator->target->deskripsi }}</td>
                        <td>{{ $capaian->indikator->kode_indikator}}.{{ $capaian->indikator->deskripsi }}</td>
                        <td>{{ $capaian->user->name }}</td>
                        <td>{{ $capaian->indikator->satuan }}</td>
                        <td>{{ $capaian->baseline }}</td>
                        <td>{{ $capaian->tahun->name }}</td>
                        <td>{{ $capaian->target_awal }}</td>
                        <td>{{ $capaian->capaian }}</td>
                        
                        @if ($capaian->status == 'tercapai')
                            <td valign="middle">Tercapain</td> 
                        @elseif($capaian->status == 'akan_tercapai')
                            <td valign="middle">Akan Tercapai</td>
                        @elseif($capaian->status == 'perlu_perhatian_kusus')
                            <td valign="middle"><i class="fa fa-caret-down text-danger" aria-hidden="true"></i> </td>
                        @else
                            <td valign="middle">Perlu <br> Perhatian Khusus</td>
                        @endif
                    </tr>
                @endif
        @endforeach     
    </tbody>
</table>