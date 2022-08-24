<table class="table table-bordered" id="example" width="100%" cellspacing="0">
    <thead>
      <tr class="text-center">
        <th rowspan="2" style="vertical-align: middle"> Tujuan SDGs </th>
        <th rowspan="2" style="vertical-align: middle"> Indikator SDGs </th>
        <th colspan="2"> Identifikasi Masalah </th>
        <th rowspan="2" style="vertical-align: middle"> Rencana Tindak Lanjut </th>
        <th rowspan="2" style="vertical-align: middle"> Institusi Pelaksana Pemerintah <br> / Non Pemerintah </th>
        @if (Auth::user()->role_id != 1 AND Auth::user()->role_id != 7)
          <th rowspan="2" style="vertical-align: middle">Aksi</th>  
        @endif
      </tr>
      <tr class="text-center">
        <th>Kategori</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach ($rencana_tindak_lanjuts as $rtl)
        @if ($rtl->user->id == Auth::user()->id)
          <tr>
            <td>{{ $rtl->indikator->target->tujuan->kode_tujuan }}.{{ $rtl->indikator->target->tujuan->name }}</td>
            <td>{{ $rtl->indikator->kode_indikator }}.{{ $rtl->indikator->deskripsi }}</td>
            <td>{{ $rtl->kategori }}</td>
            <td>{{ $rtl->deskripsi }}</td>
            <td>{{ $rtl->rtk }}</td>
            <td>{{ $rtl->pelaksana }}</td>

            <td align="center" style="width: 8rem">
              <a href="/menu/rtl/{{ $rtl->id }}/edit" class="btn btn-warning p-2"><i class="fas fa-fw fa-pen-square"></i></a>
              
              <form action="/menu/rtl/{{ $rtl->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger p-2" onclick="return confirm('Apakah Anda Yakin menghapus Kategori Masalah : {{ $rtl->kategori }} ?')"> 
                  <i class="fas fa-fw fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>

        {{-- jika yg login admin --}}
        @elseif( Auth::user()->role_id == 1 )
          <tr>
           <td>{{ $rtl->indikator->target->tujuan->kode_tujuan }}.{{ $rtl->indikator->target->tujuan->name }}</td>
            <td>{{ $rtl->indikator->kode_indikator }}.{{ $rtl->indikator->deskripsi }}</td>
            <td>{{ $rtl->kategori }}</td>
            <td>{{ $rtl->deskripsi }}</td>
            <td>{{ $rtl->rtk }}</td>
            <td>{{ $rtl->pelaksana }}</td>
          </tr>
        
        @elseif( Auth::user()->role_id == 7 )
        @if ($rtl->indikator->tujuan->user_id == Auth::user()->id)
          <tr>
           <td>{{ $rtl->indikator->target->tujuan->kode_tujuan }}.{{ $rtl->indikator->target->tujuan->name }}</td>
            <td>{{ $rtl->indikator->kode_indikator }}.{{ $rtl->indikator->deskripsi }}</td>
            <td>{{ $rtl->kategori }}</td>
            <td>{{ $rtl->deskripsi }}</td>
            <td>{{ $rtl->rtk }}</td>
            <td>{{ $rtl->pelaksana }}</td>
          </tr>
        @endif
        @endif
      @endforeach
    </tbody>
  </table>