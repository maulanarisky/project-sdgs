<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
      <tr align="center">
          @if (Auth::user()->role_id != 7)     
          <th width="5">No</th>
          @endif
          <th width="30">Tujuan</th>
          <th width="40" >Program</th>
          @if (Auth::user()->role_id == 1)
          <th width="15">Sumber Data</th>
          @elseif (Auth::user()->role_id == 7)
          <th width="15">Sumber Data</th>
          @endif
          <th width="10">Aksi</th>
  </thead>
  <tbody>
      @foreach ($pelaporan_pembelajarans as $pp)
          @if ($pp->user->id == Auth::user()->id)
              <tr>
                  <td align="center">{{ $loop->iteration }}</td>
                  <td>{{ $pp->tujuan->kode_tujuan }}.{{ $pp->tujuan->name }}</td>
                  <td>{{ $pp->name_program }}</td>
                  <td align="center" style="width: 8rem;">
                      <a href="/menu/pp/{{ $pp->id }}" class="btn btn-info"><i class="fas fa-fw fa-eye"></i></a>
                      <a href="/menu/pp/{{ $pp->id }}/edit" class="btn btn-warning"> <i class="fas fa-fw fa-pen-square"></i></a>
                      <form action="/menu/pp/{{ $pp->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class=" btn btn-danger " onclick="return confirm('Apakah Yaking Menghapus File : {{ $pp->name_program }}:')"><i class="fas fa-fw fa-trash"></i></button>
                      </form>
                  </td>
              </tr>
          @elseif(Auth::user()->role_id == 1)
           <tr>
                  <td align="center">{{ $loop->iteration }}</td>
                  <td>{{ $pp->tujuan->kode_tujuan }}.{{ $pp->tujuan->name }}</td>
                  <td>{{ $pp->name_program }}</td>
                  <td>{{ $pp->user->name }}</td>
                  <td align="center" style="width: 8rem;">
                      <a href="/menu/pp/{{ $pp->id }}" class="btn btn-info"><i class="fas fa-fw fa-eye"></i></a>  
                  </td>
              </tr>
              
        @elseif (Auth::user()->role_id == 7)
            @if ($pp->tujuan->user_id == Auth::user()->id)
                <tr>
                   
                    <td>{{ $pp->tujuan->kode_tujuan }}.{{ $pp->tujuan->name }}</td>
                    <td>{{ $pp->name_program }}</td>
                    <td>{{ $pp->user->name }}</td>
                    <td align="center" style="width: 8rem;"><a href="/menu/pp/{{ $pp->id }}" class="btn btn-info"><i class="fas fa-fw fa-eye"></i></a></td>
                </tr>
            @endif
      @endif
      @endforeach
  </tbody>
</table>