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
            @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 7) 
            <td>Aksi</td>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($capaians as $capaian)
            @if ($capaian->tahun_id == $tahunSinggle->id && $capaian->user->id == Auth::user()->id)
                    <tr align="center" >
                        <td>{{ $capaian->indikator->target->tujuan->kode_tujuan }}.{{  $capaian->indikator->target->tujuan->name }}</td>
                        <td>{{ $capaian->indikator->target->kode_target }}.{{ $capaian->indikator->target->deskripsi }}</td>
                        <td>{{ $capaian->indikator->kode_indikator}}.{{ $capaian->indikator->deskripsi }}</td>
                        <td>{{ $capaian->user->name }}</td>
                        <td>{{ $capaian->indikator->satuan }}</td>
                        <td>{{ $capaian->baseline }}</td>
                        <td>{{ $capaian->tahun->name }}</td>
                        <td>{{ $capaian->target_awal }}</td>
                        <td>{{ $capaian->capaian }}</td>
                        
                        @if ($capaian->status == 'tercapai')
                            <td valign="middle" style= "background-color:rgb(110, 239, 110);"><strong>Tercapai</strong></td> 
                        @elseif($capaian->status == 'akan_tercapai')
                            <td valign="middle" style= "background-color:rgb(239, 212, 116);"><strong>Akan Tercapai</strong></td>
                        @elseif($capaian->status == 'perlu_perhatian_kusus')
                            <td valign="middle" style= "background-color:rgb(230, 127, 127);"><strong>Perlu <br> Perhatian Khusus</strong></td>
                        @else
                            <td valign="middle"></td>
                        @endif

                        @if ($capaian->indikator->status == "active")
                            
                        <td align="center">
                            <a href="/menu/capaian/{{ $capaian->id }}/edit" class="btn btn-warning mb-2"><i class="fas fa-fw fa-pen-square"></i></a>
                         
                        </td>
                        @elseif ($capaian->indikator->status == "inactive")
                        <td>Hak Akses Belum Dibuka</td>
                            
                        @endif
                    </tr>
                {{-- jika yg login superadmin --}}
                @elseif (Auth::user()->role_id == 1 && $capaian->tahun_id == $tahunSinggle->id )
                    <tr align="center" >
                        <td>{{  $capaian->indikator->target->tujuan->kode_tujuan }}.{{  $capaian->indikator->target->tujuan->name }}</td>
                        <td>{{ $capaian->indikator->target->kode_target }}.{{ $capaian->indikator->target->deskripsi }}</td>
                        <td>{{ $capaian->indikator->kode_indikator}}.{{ $capaian->indikator->deskripsi }}</td>
                        <td>{{ $capaian->user->name }}</td>
                        <td>{{ $capaian->indikator->satuan }}</td>
                        <td>{{ $capaian->baseline }}</td>
                        <td>{{ $capaian->tahun->name }}</td>
                        <td>{{ $capaian->target_awal }}</td>
                        <td>{{ $capaian->capaian }}</td>
                        
                        @if ($capaian->status == 'tercapai')
                            <td valign="middle" style= "background-color:rgb(110, 239, 110);"><strong>Tercapai</strong></td> 
                        @elseif($capaian->status == 'akan_tercapai')
                            <td valign="middle" style= "background-color:rgb(239, 212, 116);"><strong>Akan Tercapai</strong></td>
                        @elseif($capaian->status == 'perlu_perhatian_kusus')
                            <td valign="middle" style= "background-color:rgb(230, 127, 127);"><strong>Perlu <br> Perhatian Khusus</strong></td>
                        @else
                            <td valign="middle"></td>
                        @endif
                    </tr>
                @elseif(Auth::user()->role_id == 7 && $capaian->tahun_id == $tahunSinggle->id )
                @if ($capaian->indikator->target->tujuan->user_id == Auth::user()->id)
                    
                <tr align="center" >
                   <td>{{ $capaian->indikator->target->tujuan->kode_tujuan }}.{{  $capaian->indikator->target->tujuan->name }}</td>
                   <td>{{ $capaian->indikator->target->kode_target }}.{{ $capaian->indikator->target->deskripsi }}</td>
                   <td>{{ $capaian->indikator->kode_indikator}}.{{ $capaian->indikator->deskripsi }}</td>
                   <td>{{ $capaian->user->name }}</td>
                   <td>{{ $capaian->indikator->satuan }}</td>
                   <td>{{ $capaian->baseline }}</td>
                   <td>{{ $capaian->tahun->name }}</td>
                   <td>{{ $capaian->target_awal }}</td>
                   <td>{{ $capaian->capaian }}</td>
                   
                   @if ($capaian->status == 'tercapai')
                       <td valign="middle" style= "background-color:rgb(110, 239, 110);"><strong>Tercapai</strong></td> 
                   @elseif($capaian->status == 'akan_tercapai')
                       <td valign="middle" style= "background-color:rgb(239, 212, 116);"><strong>Akan Tercapai</strong></td>
                   @elseif($capaian->status == 'perlu_perhatian_kusus')
                       <td valign="middle" style= "background-color:rgb(230, 127, 127);"><strong>Perlu <br> Perhatian Khusus</strong></td>
                   @else
                       <td valign="middle"></td>
                   @endif
               </tr>
                @endif
                @endif
        @endforeach     
    </tbody>
</table>