<table class="table table-bordered" id="dataTable"  width="100%" cellspacing="0">
    <thead>
        <tr align="center" valign="middle">
            <td >Kode Tujuan</td>
            <td >Kode Target</td>
            <td >Kode Indikator</td>
            <td >Nama Indikator</td>
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
            @if ($capaian->tahun_id == $tahunSinggle->id)
                @if ($capaian->user->id == Auth::user()->id)
                    <tr align="center" >
                        <td>{{ $capaian->indikator->target->tujuan->kode_tujuan }}</td>
                        <td>{{ $capaian->indikator->target->kode_target }}</td>
                        <td>{{ $capaian->indikator->kode_indikator}}</td>
                        <td align="left">{{ $capaian->indikator->deskripsi }}</td>
                        <td>{{ $capaian->user->name }}</td>
                        <td>{{ $capaian->indikator->satuan }}</td>
                        <td>{{ $capaian->baseline }}</td>
                        <td>{{ $capaian->tahun->name }}</td>
                        <td>{{ $capaian->target_awal }}</td>
                        <td>{{ $capaian->capaian }}</td>
                        
                        {{-- @if ($capaian->status == 'tercapai')
                            <td valign="middle"><i class="fa fa-circle text-success" aria-hidden="true"></i></td> 
                        @elseif($capaian->status == 'akan_tercapai')
                            <td valign="middle"><i class="fa fa-play text-warning" aria-hidden="true"></i></td>
                        @elseif($capaian->status == 'perlu_perhatian_kusus')
                            <td valign="middle"><i class="fa fa-caret-down text-danger" aria-hidden="true"></i> </td>
                        @else
                            <td></td>
                        @endif --}}
                        @if ($capaian->status == 'tercapai')
                            <td valign="middle"><span class="badge badge-pill badge-success">Tercapai</span></td> 
                        @elseif($capaian->status == 'akan_tercapai')
                            <td valign="middle"><span class="badge badge-pill badge-warning">Akan Tercapai</span></i></td>
                        @elseif($capaian->status == 'perlu_perhatian_kusus')
                            <td valign="middle"><span class="badge badge-pill badge-danger">Perlu Perhatian <br> Khusus</span></i> </td>
                        @else
                            <td></td>
                        @endif

                        <td align="center">
                            <a href="/menu/capaian/{{ $capaian->id }}/edit" class="btn btn-warning mb-2"><i class="fas fa-fw fa-pen-square"></i></a>
                            <form action="/menu/capaian/{{ $capaian->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapur indikator : {{ $capaian->name }} ?')">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                {{-- jika yg login superadmin --}}
                @elseif (Auth::user()->role_id == 1 )
                    <tr align="center" >
                        <td>{{ $capaian->indikator->target->tujuan->kode_tujuan }}</td>
                        <td>{{ $capaian->indikator->target->kode_target }}</td>
                        <td>{{ $capaian->indikator->kode_indikator}}</td>
                        <td align="left">{{ $capaian->indikator->deskripsi }}</td>
                        <td>{{ $capaian->user->name }}</td>
                        <td>{{ $capaian->indikator->satuan }}</td>
                        <td>{{ $capaian->baseline }}</td>
                        <td>{{ $capaian->tahun->name }}</td>
                        <td>{{ $capaian->target_awal }}</td>
                        <td>{{ $capaian->capaian }}</td>
                        
                          @if ($capaian->status == 'tercapai')
                            <td valign="middle"><span class="badge badge-pill badge-success">Tercapai</span></td> 
                        @elseif($capaian->status == 'akan_tercapai')
                            <td valign="middle"><span class="badge badge-pill badge-warning">Akan Tercapai</span></i></td>
                        @elseif($capaian->status == 'perlu_perhatian_kusus')
                             <td valign="middle"><span class="badge badge-pill badge-danger">Perlu Perhatian <br> Khusus</span></i> </td>
                        @else
                            <td></td>
                        @endif
                    </tr>
                @endif
            @endif
        @endforeach     
    </tbody>
</table>