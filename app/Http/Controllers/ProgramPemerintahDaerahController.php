<?php

namespace App\Http\Controllers;

use App\Exports\Form2bExport;
use App\Models\Indikator;
use App\Models\Kegiatan;
use App\Models\ProgramPemerintahDaerah;
use App\Models\Tahun;
use App\Models\Tujuan;
use App\Models\Program;
use App\Models\SubKegiatan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Contracts\Service\Attribute\Required;

class ProgramPemerintahDaerahController extends Controller
{
    public function form2bExport($tahunID){
        return Excel::download(new Form2bExport($tahunID), 'form 2b.xlsx');
    }
    public function index($tahunID)
    {
         return view('Menu.ProgramPemerintahDaerah.index',[
            'program_pemerintah_daerahs' => ProgramPemerintahDaerah::with('indikator.target.tujuan', 'tahun', 'user')->get(),
            'tahuns' => Tahun::all(),
            // 'sub_kegiatan' => SubKegiatan::all(),
            'tahunSinggle' => Tahun::findOrFail($tahunID),
        ]);
    }

   
    public function create()
    {
         return view('Menu.ProgramPemerintahDaerah.create',[
            'indikators' => Indikator::all(),
            'subkegiatans' => SubKegiatan::all()
        ]);
    }

   
    public function store(Request $request)
    {
           $tahuns = Tahun::all();

            
            foreach($tahuns as $tahun){
                $validatedCreateCapaian = $request->validate([
                    'indikator_id' => 'required',
                    'sub_kegiatan_id' => 'required',
                    'user_id' => 'required',
                ]);

                $validatedCreateCapaian['tahun_id'] = $tahun->id;
                ProgramPemerintahDaerah::create($validatedCreateCapaian);
            }

        return redirect('/menu/pemda/7')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

 
    public function show(ProgramPemerintahDaerah $programPemerintahDaerah)
    {
        //
    }

  
    public function edit(ProgramPemerintahDaerah $pemda)
    {
        return view('Menu.ProgramPemerintahDaerah.edit',[
            'pemda' => ProgramPemerintahDaerah::where('id','=',$pemda->id)->first(),
        ]);
    }

    public function update(Request $request, ProgramPemerintahDaerah $pemda)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            // 'tahun_id' => 'required',
            'sub_kegiatan_id'=> 'required|string',
            'target_tahun' => 'required|string',
            'realisasi_target_sem_1' => 'string',
            'realisasi_target_sem_2' => 'string',
            'alokasi_anggaran' => 'required|string',
            'realisasi_anggaran_sem_1' =>'string',
            'realisasi_anggaran_sem_2' =>'string',
            'lokasi_pelaksanaan_kegiatan' => 'required|string',
            'sumber_pendanaan' => 'required|string',
        ]);

        ProgramPemerintahDaerah::where('id', $pemda->id)->update($validatedData);
        return redirect('/menu/pemda/7')->with('success', 'Berhasil di <b>Ubah</b>');
    }

  
    public function destroy(ProgramPemerintahDaerah $pemda)
    {
        ProgramPemerintahDaerah::destroy($pemda->id);
        return redirect('/menu/pemda/7')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
