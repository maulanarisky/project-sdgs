<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead >
      <tr align="center" >
        <th colspan="2"> Kategori Kegiatan Usaha Berkelanjutan </th>
        <th colspan="2"> Indikator SDGs </th>
        <th colspan="5"> Proyek/Kegiatan/Produk/Jasa Berkelanjutan </th>
        <th colspan="3"> Evaluasi target</th>
      </tr>
      <tr class="text-center">
        <th style="vertical-align: middle"> Kode POJK </th>
        <th style="vertical-align: middle"> Uraian Kegiatan Usaha Berkelanjutan </th>
        <th style="vertical-align: middle"> Kode Indikator </th>
        <th style="vertical-align: middle"> Nama Indikator </th> 
        <th style="vertical-align: middle"> Kode Kegiatan </th>
        <th style="vertical-align: middle"> Nama Kegiatan</th>
        <th style="vertical-align: middle"> Indikator Capaian </th>                        
        <th style="vertical-align: middle"> Satuan </th>
        <th style="vertical-align: middle"> Waktu</th>
        <th style="vertical-align: middle"> Target </th>
        <th style="vertical-align: middle"> Capaian </th>
        @if (Auth::user()->role_id == 1)
          <th style="vertical-align: middle"> Pelaku Usaha </th>
        @elseif(Auth::user()->role_id != 1)    
          <th style="vertical-align: middle">Aksi</th>  
        @endif
      </tr> 
    </thead>
    <tbody id="myTable">
      @foreach ($program_pelaku_usahas as $umkm)
        @if ($umkm->user_id == Auth::user()->id)
          <tr align="center">                       
            <td>{{ $umkm->kode_pojk}}</td>
            <td>{{ $umkm->kegiatan_pojk}}</td>
            <td>{{ $umkm->indikator->kode_indikator }}</td>
            <td>{{ $umkm->indikator->deskripsi }}</td>
            <td>{{ $umkm->no_urut }}</td>
            <td>{{ $umkm->kegiatan }}</td>
            <td>{{ $umkm->indikator_capaian }}</td>
            <td>{{ $umkm->satuan }}</td>
            <td>{{ $umkm->waktu }} tahun</td>
            <td>{{ $umkm->target }}</td>
            <td>{{ $umkm->capaian }}</td>

            <td align="center" style="width: 8rem">
              <a href="/menu/umkm/{{ $umkm->id }}/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
              
              <form action="/menu/umkm/{{ $umkm->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapus kegiatan dengan kode POJK : {{ $umkm->kode_pojk }} ?')">
                  <i class="fas fa-fw fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          {{-- jika yg login superadmin --}}
        @elseif (Auth::user()->role_id == 1 )
          <tr align="center">                       
            <td>{{ $umkm->kode_pojk}}</td>
            <td>{{ $umkm->kegiatan_pojk}}</td>
            <td>{{ $umkm->indikator->kode_indikator }}</td>
            <td>{{ $umkm->indikator->deskripsi }}</td>
            <td>{{ $umkm->no_urut }}</td>
            <td>{{ $umkm->kegiatan }}</td>
            <td>{{ $umkm->indikator_capaian }}</td>
            <td>{{ $umkm->satuan }}</td>
            <td>{{ $umkm->waktu }} tahun</td>
            <td>{{ $umkm->target }}</td>
            <td>{{ $umkm->capaian }}</td>
            <td>{{ $umkm->user->name }}</td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>