<?php

namespace App\Http\Controllers;

use App\Models\RencanaTindakLanjut;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class RencanaTindakLanjutController extends Controller
{
  
    public function index()
    {
         return view('Menu.RencanaTindakLanjut.index',[
            'rencana_tindak_lanjuts' => RencanaTindakLanjut::all()
        ]);
    }

  
    public function create()
    {
        return view('Menu.RencanaTindakLanjut.create',[
            'rencana_tindak_lanjuts' => RencanaTindakLanjut::all(),
            'tujuans' => Tujuan::all(),
        ]);
    }

  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tujuan_id' => 'required',
            'kategori' => 'required|string',
            'deskripsi'=> 'required|string',
            'rtk'=> 'required|string',
            'pelaksana'=> 'required|string'
        ]);

        RencanaTindakLanjut::create($validatedData);

        return redirect('/menu/rtl')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

   
    public function show(RencanaTindakLanjut $rencanaTindakLanjut)
    {
        //
    }

 
    public function edit(RencanaTindakLanjut $rtl)
    {
         return view('Menu.RencanaTindakLanjut.edit',[
            'rtl' => RencanaTindakLanjut::where('id','=',$rtl->id)->first(),
            'tujuans' => Tujuan::all(),
        ]);
    }

    public function update(Request $request, RencanaTindakLanjut $rtl)
    {
         $validatedData = $request->validate([
            'user_id' => 'required',
            'tujuan_id' => 'required',
            'kategori' => 'required|string',
            'deskripsi'=> 'required|string',
            'rtk'=> 'required|string',
            'pelaksana'=> 'required|string'
        ]);

        RencanaTindakLanjut::where('id', $rtl->id)->update($validatedData);

        return redirect('/menu/rtl')->with('success', ' Berhasil di <b>Tambahkan</b>');
    }

  
    public function destroy(RencanaTindakLanjut $rtl)
    {
        RencanaTindakLanjut::destroy($rtl->id);
        return redirect('/menu/rtl')->with('success', ' Berhasil di <b>Hapus</b>');
    }
}
