<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use App\Models\Kegiatan;
use App\Models\Program;
use App\Models\ProgramMitraSwasta;
use App\Models\Tahun;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class ProgramMitraSwastaController extends Controller
{
    
    public function index($tahunID)
    {
         return view('Menu.ProgramMitraSwasta.index',[
            'tahunSinggle' => Tahun::findOrFail($tahunID),
            // 'kegiatans' =>Kegiatan::with('user')->get(),
            'output_kegiatans' => ProgramMitraSwasta::with('kegiatan', 'user')->get(),
        ]);
    }

    public function create()
    {
         return view('Menu.ProgramMitraSwasta.create',[
            'tahuns' => Tahun::all(),
            'indikators' => Indikator::all(),
            'programs' => Program::all(),
            'kegiatans' =>Kegiatan::with('user')->get()
        ]);
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tahun_id' => 'required',
            'kegiatan_id'=> 'required',
            'name_outputkegiatan' => 'required|string'
        ]);

        ProgramMitraSwasta::create($validatedData);
        return redirect('/menu/mitraswasta/7')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

    
    public function show(ProgramMitraSwasta $programMitraSwasta)
    {
        //
    }

   
    public function edit(ProgramMitraSwasta $mitraswastum)
    {
        return view('Menu.ProgramMitraSwasta.edit',[
            'mitraswastum' => ProgramMitraSwasta::where('id','=',$mitraswastum->id)->first(),
            'tahuns' => Tahun::all(), 
        ]);
    }

    
    public function update(Request $request, ProgramMitraSwasta $mitraswastum)
    {
     $validatedData = $request->validate([
            'user_id' => 'required',
            'tahun_id' => 'required',
            'name_outputkegiatan' => 'required|string',
            'satuan' => 'required|string',
            'target_tahun' => 'required|string',
            'realisasi_target_sem_1' => 'required|string',
            'realisasi_target_sem_2' => 'required|string',
            'alokasi_anggaran' => 'required|string',
            'realisasi_anggaran_sem_1' =>'required|string',
            'realisasi_anggaran_sem_2' =>'required|string',
            'sumber_pendanaan' => 'required|string',
            'lokasi_pelaksanaan_kegiatan' => 'required|string',
        ]);

        ProgramMitraSwasta::where('id', $mitraswastum->id)->update($validatedData);
        return redirect('/menu/mitraswasta/7')->with('success', ' Berhasil di <b>Ubah</b>');   
    }

    
    public function destroy(ProgramMitraSwasta $mitraswastum)
    {
        ProgramMitraSwasta::destroy($mitraswastum->id);
        return redirect('/menu/mitraswasta/7N')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
