<?php

namespace App\Http\Controllers;

use App\Models\Pilar;
use App\Models\Target;
use App\Models\Tujuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TargetController extends Controller
{
    public function index()
    {   
        return view('menu.Target.index', [
            'targets' => Target::with('tujuan')->get()
        ]);
    }

    public function create()
    {
        return view('Menu.Target.create', [
            'tujuans' => Tujuan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tujuan_id' => 'required',
            'kode_target' => 'required|unique:targets',
            'deskripsi' => 'required|string'
        ]);

        Target::create($validatedData);
        return redirect('/menu/target')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('Menu.Target.edit',[
            'target' => Target::where('id','=', $id)->first(),
            'tujuans' => Tujuan::all()
        ]);
    }

    public function update(Request $request, Target $target)
    {
        $rules = [
            'tujuan_id' => 'required',
            'kode_target' => 'required',
            'deskripsi' => 'required|string'
        ];

        $validatedData = $request->validate($rules);

        Target::where('id', $target->id)->update($validatedData);
        return redirect('/menu/target')->with('success', ' Berhasil di <b>Ubah</b>');
    }

    public function destroy(Target $target)
    {
        Target::destroy($target->id);
        return redirect('/menu/target')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
