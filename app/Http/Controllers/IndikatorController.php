<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use App\Models\Indikator;
use App\Models\Tahun;
use App\Models\Target;
use App\Models\Tujuan;
use App\Models\User;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        return view('menu.indikator.index', [
            'indikators' => Indikator::all(),
        ]);
    }

    public function create()
    {
        return view('menu.indikator.create', [
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
        return view('menu.indikator.edit', [
            'indikator' => Indikator::where('id','=', $id)->first(),
            'tujuans' => Tujuan::all(),
            'targets' => Target::all(),
            'users' => User::all()
        ]);
    }

    public function update(Request $request, Indikator $indikator)
    {
        $rules = [
            'tujuan_id' => 'required',
            'target_id' => 'required',
            'kode_indikator' => 'required',
            'deskripsi' => 'required|string',
            'user_id' => 'required'
        ];

        $validatedDataIndikator = $request->validate($rules);

        $tahun = Tahun::all();
        $validatedDataCapaian = $request->validate([
            'tujuan_id' => 'required',
            'target_id' => 'required',
            'indikator_id' => 'required',
            'user_id' => 'required',
        ]);
        foreach($tahun as $th){
            $validatedDataCapaian['tahun_id'] = $th->id;
            $th = Capaian::create($validatedDataCapaian);
        }

        Indikator::where('id', $indikator->id)->update($validatedDataIndikator);
        

        return redirect('/menu/indikator')->with('success', ' Berhasil di <b>Ubah</b>');
    }

    public function destroy(Indikator $indikator)
    {
        Indikator::destroy($indikator->id);
        return redirect('/menu/indikator')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
