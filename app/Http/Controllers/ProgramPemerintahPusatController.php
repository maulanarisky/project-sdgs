<?php

namespace App\Http\Controllers;

use App\Exports\Form2aExport;
use App\Models\Indikator;
use App\Models\Kegiatan;
use App\Models\Program;
use App\Models\ProgramPemerintahPusat;
use App\Models\Tahun;
use App\Models\Tujuan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProgramPemerintahPusatController extends Controller
{
    public function form2aExport($tahunID){
        return Excel::download(new Form2aExport($tahunID), 'form 2a.xlsx');
    }

    public function index($tahunID)
    {
        return view('Menu.ProgramPemerintahPusat.index',[
            'tahunSinggle' => Tahun::findOrFail($tahunID),
            'program_pemerintah_pusats' => ProgramPemerintahPusat::all()
        ]);
    }

   
    public function create()
    {
         return view('Menu.ProgramPemerintahPusat.create',[
            'program_pemerintah_pusats' => ProgramPemerintahPusat::all(),
            'tahuns' => Tahun::all(),
            'tujuans' => Tujuan::all(),
            'indikators'=> Indikator::all(),
            'programs' => Program::with('user')->get(),
            'kegiatans' =>Kegiatan::with('user')->get()
        ]);
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tahun_id' => 'required',
            'tujuan_id' => 'required',
            'indikator_id' => 'required|string',
            'program_id' => 'required|string',
            'kegiatan_id'=> 'required|string',
            'kode_rincianoutput' => 'required|string',
            'name_rincianoutput' => 'required|string'
        ]);

        ProgramPemerintahPusat::create($validatedData);

        return redirect('/menu/pusat')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

   
    public function show(ProgramPemerintahPusat $programPemerintahPusat)
    {
        
    }

    
    public function edit(ProgramPemerintahPusat $pusat)
    {
        return view('Menu.ProgramPemerintahPusat.edit',[
            'pusat' => ProgramPemerintahPusat::where('id','=',$pusat->id)->first(),
            'programs' => Program::all(),
            'tahuns' => Tahun::all(),
            'tujuans' => Tujuan::all(),
            'indikators'=> Indikator::all(),
            'kegiatans' =>Kegiatan::All()
        
        ]);
    }

    
    public function update(Request $request, ProgramPemerintahPusat $pusat)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tahun_id' => 'required',
            'tujuan_id' => 'required',
            'indikator_id' => 'required|string',
            'program_id' => 'required|string',
            'kegiatan_id'=> 'required|string',
            'kode_rincianoutput' => 'required|string',
            'name_rincianoutput' => 'required|string',
            'satuan' => 'required|string',
            'target_tahun' => 'required|string',
            'realisasi_target_sem_1' => 'required|string',
            'realisasi_target_sem_2' => 'required|string',
            'alokasi_anggaran' => 'required|string',
            'realisasi_anggaran_sem_1' =>'required|string',
            'realisasi_anggaran_sem_2' =>'required|string',
            'lokasi_pelaksanaan_kegiatan' => 'required|string',
            'instansi_pelaksana' => 'required|string'
        ]);

        ProgramPemerintahPusat::where('id', $pusat->id)->update($validatedData);

        return redirect('/menu/pusat')->with('success', ' Berhasil di <b>Ubah</b>');
    }

    
    public function destroy(ProgramPemerintahPusat $pusat)
    {
        ProgramPemerintahPusat::destroy($pusat->id);
        return redirect('/menu/pusat')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
