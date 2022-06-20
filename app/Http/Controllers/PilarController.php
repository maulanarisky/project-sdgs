<?php

namespace App\Http\Controllers;

use App\Models\Pilar;
use Illuminate\Http\Request;

class PilarController extends Controller
{
    public function index()
    {
        return view('menu.pilar.index', [
            'pilars' => Pilar::all()
        ]);
    }

    public function create()
    {
        return view('menu.pilar.create', [
            'pilar' => Pilar::all()->last()
        ]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|max:3',
            'name' => 'required|string'
        ]);

        Pilar::create($validatedData);
        return redirect('/menu/pilar')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pilar = Pilar::where('id','=', $id)->first();
        return view('menu/pilar/edit', compact('pilar'));
    }

    public function update(Request $request, Pilar $pilar)
    {
        $validatedData = $request->validate([
            'id' => 'required|max:3',
            'name' => 'required|string'
        ]);
    
        Pilar::where('id', $pilar->id)->update($validatedData);
        return redirect('/menu/pilar')->with('success', 'Berhasil di <b>Ubah</b>');
    }

    public function destroy(Pilar $pilar)
    {
        Pilar::destroy($pilar->id);
        return redirect('/menu/pilar')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
