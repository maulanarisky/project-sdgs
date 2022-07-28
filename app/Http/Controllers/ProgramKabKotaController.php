<?php

namespace App\Http\Controllers;

use App\Exports\Form2bkabkotaExport;
use App\Models\ProgramKabKota;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProgramKabKotaController extends Controller
{
    
    public function form2bkabkotaExport($tahunID){
        return Excel::download(new Form2bkabkotaExport($tahunID), 'form 2b Kabkota.xlsx');
    }
    public function index($tahunID)
    {
         return view('Menu.ProgramKabKota.index',[
            'program_kab_kotas' => ProgramKabKota::with('Kabkota.Indikator', 'tahun', 'user')->get(),
            'tahuns' => Tahun::all(),
            // 'sub_kegiatan' => SubKegiatan::all(),
            'tahunSinggle' => Tahun::findOrFail($tahunID),
        ]);
    }

  
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

 
    public function show(ProgramKabKota $programKabKota)
    {
        //
    }

  
    public function edit(ProgramKabKota $pkabkotum)
    {
        return view('Menu.ProgramKabKota.edit',[
            'pkabkota' => ProgramKabKota::where('id','=',$pkabkotum->id)->first(),
        ]);
    }

   
    public function update(Request $request, ProgramKabKota $pkabkotum)
    {
          $validatedData = $request->validate([
            'user_id' => 'required',
            // 'tahun_id' => 'required',
            'kabkota_id'=> 'required|string',
            'target_tahun' => 'required|string',
            'realisasi_target_sem_1' => 'required|string',
            'realisasi_target_sem_2' => 'required|string',
            'alokasi_anggaran' => 'required|string',
            'realisasi_anggaran_sem_1' =>'required|string',
            'realisasi_anggaran_sem_2' =>'required|string',
            'realisasi_anggaran_sem_2' =>'required|string',
            'lokasi_pelaksanaan_kegiatan' => 'required|string',
            'sumber_pendanaan' => 'required|string',
        ]);

        ProgramKabKota::where('id', $pkabkotum->id)->update($validatedData);
        return redirect('/menu/pkabkota/7')->with('success', 'Berhasil di <b>Ubah</b>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramKabKota  $programKabKota
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramKabKota $programKabKota)
    {
        //
    }
}
