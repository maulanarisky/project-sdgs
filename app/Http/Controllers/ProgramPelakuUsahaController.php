<?php

namespace App\Http\Controllers;

use App\Models\ProgramPelakuUsaha;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProgramPelakuUsahaRequest;
use App\Models\Indikator;
use App\Models\Kegiatan;
use App\Models\Tahun;

class ProgramPelakuUsahaController extends Controller
{
    
    public function index()
    {
        return view('Menu.ProgramPelakuUsaha.index',[
            'program_pelaku_usahas' => ProgramPelakuUsaha::with('user')->get()
        ]);
    }
  
    public function create()
    {
         return view('Menu.ProgramPelakuUsaha.create',[
            'program_pelaku_usahas' => ProgramPelakuUsaha::all(),
            'tahuns' => Tahun::all(),
            'indikators'=> Indikator::all(),
            'kegiatans' =>Kegiatan::with('user')->get()
        ]);
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'user_id' => 'required',
            'indikator_id' => 'required|string',
            'kode_pojk' => 'required|string',
            'kegiatan_pojk' => 'required|string',
            'no_urut' => 'required',
            'kegiatan' => 'required|string',
            'indikator_capaian' => 'required|string',
            'satuan' => 'required|string',
            'waktu' => 'required|string',
            'target' => 'required|string',
            'capaian' => 'required|string',
        ]);

        ProgramPelakuUsaha::create($validatedData);
        return redirect('/menu/umkm')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

  
    public function show(ProgramPelakuUsaha $umkm)
    {
        
    }
 
    public function edit($id)
    {
        return view('Menu.ProgramPelakuUsaha.edit',[
            'umkm' => ProgramPelakuUsaha::where('id','=',$id)->first(),
            'indikators'=> Indikator::all(),
        ]);
    }

  
    public function update(Request $request, ProgramPelakuUsaha $umkm)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'indikator_id' => 'required|string',
            'kode_pojk' => 'required|string',
            'kegiatan_pojk' => 'required|string',
            'no_urut' => 'required',
            'kegiatan' => 'required|string',
            'indikator_capaian' => 'required|string',
            'satuan' => 'required|string',
            'waktu' => 'required|string',
            'target' => 'required|string',
            'capaian' => 'required|string',
        ]);

        ProgramPelakuUsaha::where('id', $umkm->id)->update($validatedData);
        return redirect('/menu/umkm')->with('success', ' Berhasil di <b>Ubah</b>'); 
    }

   
    public function destroy(ProgramPelakuUsaha $umkm)
    {
        ProgramPelakuUsaha::destroy($umkm->id);
        return redirect('/menu/umkm')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
