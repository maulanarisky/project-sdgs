<?php

namespace App\Http\Controllers;

use App\Models\Pilar;
use App\Models\User;
use App\Models\Tujuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TujuanController extends Controller
{
    public function index()
    {
        return view('Menu.Tujuan.index', [
            'tujuans' => Tujuan::all()
        ]);
    }

    public function create()
    {
        return view('Menu.Tujuan.create', [
            'pilars' => Pilar::all(),
            'users' => User::Where('role_id', '=', 7),
            'tujuan' => Tujuan::all()->last()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pilar_id' => 'required',
            'kode_tujuan' => 'required|unique:tujuans',
            'name' => 'required|string',
            'deskripsi' => 'required',
            'img' => 'image|file',
            'deskripsi' => 'required'
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('img-tujuan');
        }

        Tujuan::create($validatedData);
        return redirect('/menu/tujuan')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('Menu.Tujuan.edit',[
            'tujuan' => Tujuan::where('id','=', $id)->first(),
            'pilars' => Pilar::all(),
            'users' => User::Where('role_id', '=', 7)->get(),
        ]);
    }

    public function update(Request $request, Tujuan $tujuan)
    {
        $rules = [
            'pilar_id' => 'required',
            'user_id' => '',
            'kode_tujuan' => 'required',
            'name' => 'required|string',
            'img' => 'image|file',
            'deskripsi' => 'required'
        ];
        
        $validatedData = $request->validate($rules);

        if ($request->file('img')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['img'] = $request->file('img')->store('img-tujuan');
        }

        Tujuan::where('id', $tujuan->id)->update($validatedData);
        return redirect('/menu/tujuan')->with('success', ' Berhasil di <b>Ubah</b>');
    }

    public function destroy(Tujuan $tujuan)
    {
        if ($tujuan->img) {
            Storage::delete($tujuan->img);
        }
        Tujuan::destroy($tujuan->id);
        return redirect('/menu/tujuan')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
