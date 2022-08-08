<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use App\Models\Indikator;
use App\Models\ProgramPemerintahDaerah;
use App\Models\ProgramPemerintahPusat;
use App\Models\Tahun;
use App\Models\Target;
use App\Models\Tujuan;
use App\Models\User;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        return view('Menu.Indikator.index', [
            'indikators' => Indikator::with('target.tujuan')->get(),
        ]);
    }

    public function create()
    {
        return view('Menu.Indikator.create', [
            'tujuans' => Tujuan::all(),
            'targets' => Target::all()
        ]);
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'tujuan_id' => 'required',
            'target_id' => 'required',
            'kode_indikator' => 'required|unique:indikators',
            'deskripsi' => 'required|string'
        ]);
        
           $th =  Indikator::create($validatedData);
        
        return redirect('/menu/indikator')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('Menu.Indikator.edit', [
            'indikator' => Indikator::where('id','=', $id)->first(),
            'tujuans' => Tujuan::all(),
            'targets' => Target::all(),
            'users' => User::all()
        ]);
    }

    public function update(Request $request, Indikator $indikator)
    {
        $rules = $request->validate([
            'tujuan_id' => 'required',
            'target_id' => 'required',
            'kode_indikator' => 'required',
            'deskripsi' => 'required|string',
            'user_id' => 'required',
            'satuan' => '',
            'status' => 'required'
        ]);
        Indikator::where('id', $indikator->id)->update($rules);

        $cekCapaian = Capaian::where([
            ['indikator_id', '=', $indikator->id]
        ])->first();
       

        if ($cekCapaian) {

            $rulesCapaian = $request->validate([
                'indikator_id' => 'required',
                'user_id' => 'required',
            ]);
            Capaian::where('indikator_id', $indikator->id)->update($rulesCapaian);    

        } else {

            $tahuns = Tahun::all();

            foreach($tahuns as $tahun){
                $validatedCreateCapaian = $request->validate([
                    'indikator_id' => 'required',
                    'user_id' => 'required',
                ]);

                $validatedCreateCapaian['tahun_id'] = $tahun->id;
                Capaian::create($validatedCreateCapaian);
            }
        } 
        return redirect('/menu/indikator')->with('success', ' Berhasil di <b>Ubah</b>');
    }

    public function destroy(Indikator $indikator)
    {
        Indikator::destroy($indikator->id);
        return redirect('/menu/indikator')->with('success', ' Berhasil di <b>Hapus</b>');
    }

    public function updateform1($id)
    {
        // $indikator = Indikator::where();

           $validatedform1['status'] = "active";
           Indikator::where('user_id','!=', $id )->update($validatedform1);
      
        return redirect('/menu/indikator')->with('success', 'Akses Form 1 <b>Dibuka</b>');

    }
    public function nonform1($id)
    {
        // $indikator = Indikator::where();
       
           $validatedform1['status'] = "inactive";
           Indikator::where('user_id','!=', $id )->update($validatedform1);
      
        return redirect('/menu/indikator')->with('success', 'Akses Form 1 <b>Ditutup</b>');

    }
}
