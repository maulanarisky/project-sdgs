<?php

namespace App\Http\Controllers;

use App\Exports\Form2bkabkotaExport;
use App\Models\Indikator;
use App\Models\Kabkota;
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
            'program_kab_kotas' => ProgramKabKota::with('kabkota.indikator.tujuan', 'tahun', 'user')->orderBy('id', 'DESC')->get(),
            'tahuns' => Tahun::all(),
            // 'sub_kegiatan' => SubKegiatan::all(),
            'tahunSinggle' => Tahun::findOrFail($tahunID),
        ]);
    }

  
    public function create()
    {
        return view('Menu.ProgramKabKota.create',[
            'indikators' => Indikator::all(),
            'kabkotas' => Kabkota::all()
        ]);
    }

    
    public function store(Request $request)
    {
        $tahuns = Tahun::all();

            
            foreach($tahuns as $tahun){
                $validatedCreateCapaian = $request->validate([
                    'indikator_id' => 'required',
                    'kabkota_id' => 'required',
                    'user_id' => 'required',
                ]);

                $validatedCreateCapaian['tahun_id'] = $tahun->id;
                ProgramKabKota::create($validatedCreateCapaian);
            }

        return redirect('/menu/pkabkota/7')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

 
    public function show(ProgramKabKota $programKabKota)
    {
        //
    }

  
    public function edit(ProgramKabKota $pkabkotum)
    {
        return view('Menu.ProgramKabKota.edit',[
            'pkabkota' => ProgramKabKota::where('id','=',$pkabkotum->id)->first(),
            'indikators' => Indikator::all(),
        ]);
    }

   
    public function update(Request $request, ProgramKabKota $pkabkotum)
    {
          $validatedData = $request->validate([
            'user_id' => 'required',
            'indikator_id' => 'required',
            'kabkota_id'=> 'required|string',
            'target_tahun' => 'required|string',
            'realisasi_target_sem_1' => 'string',
            'realisasi_target_sem_2' => 'string',
            'alokasi_anggaran' => 'required|string',
            'realisasi_anggaran_sem_1' =>'string',
            'realisasi_anggaran_sem_2' =>'string',
            'lokasi_pelaksanaan_kegiatan' => 'required|string',
            'sumber_pendanaan' => 'required|string',
        ]);

        ProgramKabKota::where('id', $pkabkotum->id)->update($validatedData);
        return redirect('/menu/pkabkota/7')->with('success', 'Berhasil di <b>Ubah</b>');
    }

   
    public function destroy(ProgramKabKota $pkabkotum)
    {
        ProgramKabKota::destroy($pkabkotum->id);
        return redirect('/menu/pkabkota/7')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
