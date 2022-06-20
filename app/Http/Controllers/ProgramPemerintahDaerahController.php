<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use App\Models\Kegiatan;
use App\Models\ProgramPemerintahDaerah;
use App\Models\Tahun;
use App\Models\Tujuan;
use App\Models\Program;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProgramPemerintahDaerahController extends Controller
{
    
    public function index($tahunID)
    {
         return view('Menu.ProgramPemerintahDaerah.index',[
            'program_pemerintah_daerahs' => ProgramPemerintahDaerah::all(),
            'tahunSinggle' => Tahun::findOrFail($tahunID),
        ]);
    }

   
    public function create()
    {
         return view('Menu.ProgramPemerintahDaerah.create',[
            'tahuns' => Tahun::all(),
            'kegiatans' =>Kegiatan::with('user')->get(),
            'programs' => Program::with('user')->get(),
            'indikators' => Indikator::all(),
        ]);
    }

   
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'user_id' => 'required',
            'tahun_id' => 'required',
            'kegiatan_id'=> 'required|string',
            'kode_subkegiatan' => 'required|string|unique:program_pemerintah_daerahs',
            'name_subkegiatan' => 'required|string'
        ]);

        ProgramPemerintahDaerah::create($validatedData);

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
            'tahuns' => Tahun::all(),
            'kegiatans' =>Kegiatan::All()
        ]);
    }

    public function update(Request $request, ProgramPemerintahDaerah $pemda)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tahun_id' => 'required',
            'kegiatan_id'=> 'required|string',
            'kode_subkegiatan' => 'required|string',
            'name_subkegiatan' => 'required|string',
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

        ProgramPemerintahDaerah::where('id', $pemda->id)->update($validatedData);
        return redirect('/menu/pemda/7')->with('success', 'Berhasil di <b>Ubah</b>');
    }

  
    public function destroy(ProgramPemerintahDaerah $pemda)
    {
        ProgramPemerintahDaerah::destroy($pemda->id);
        return redirect('/menu/pemda')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
