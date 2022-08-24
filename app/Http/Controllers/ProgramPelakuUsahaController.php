<?php

namespace App\Http\Controllers;

use App\Exports\Form4Export;
use App\Models\ProgramPelakuUsaha;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProgramPelakuUsahaRequest;
use App\Models\Indikator;
use App\Models\Kegiatan;
use App\Models\Tahun;
use Maatwebsite\Excel\Facades\Excel;

class ProgramPelakuUsahaController extends Controller
{
    public function form4Export(){
        return Excel::download(new Form4Export, 'form 4.xlsx');
    }
    
    public function index()
    {
        return view('Menu.ProgramPelakuUsaha.index',[
            'program_pelaku_usahas' => ProgramPelakuUsaha::with('user', 'indikator')->get()
        ]);
    }
  
    public function create()
    {
         return view('Menu.ProgramPelakuUsaha.create',[
            'indikators'=> Indikator::all(),
        ]);
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'user_id' => 'required',
            'indikator_id' => 'required|string',
            'kode_pojk' => 'string',
            'kegiatan_pojk' => 'required|string',
            'no_urut' => 'required',
            'kegiatan' => 'required|string',
            'indikator_capaian' => 'required|string',
            'satuan' => 'required|string',
            'waktu' => 'required|int    ',
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
            'kode_pojk' => 'string',
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
