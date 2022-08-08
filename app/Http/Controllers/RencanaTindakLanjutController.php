<?php

namespace App\Http\Controllers;

use App\Exports\Form5Export;
use App\Models\Indikator;
use App\Models\RencanaTindakLanjut;
use App\Models\Tujuan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RencanaTindakLanjutController extends Controller
{
    public function form5Export(){
        return Excel::download(new Form5Export, 'form 5.xlsx');
    }
  
    public function index()
    {
         return view('Menu.RencanaTindakLanjut.index',[
            'rencana_tindak_lanjuts' => RencanaTindakLanjut::with('indikator.target.tujuan','user', 'tujuan')->get()
        ]);
    }

  
    public function create()
    {
        return view('Menu.RencanaTindakLanjut.create',[
            'rencana_tindak_lanjuts' => RencanaTindakLanjut::all(),
            'tujuans' => Tujuan::all(),
            'indikators' => Indikator::all(),
        ]);
    }

  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'indikator_id' => 'required',
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
            'indikators' => Indikator::all(),
        ]);
    }

    public function update(Request $request, RencanaTindakLanjut $rtl)
    {
         $validatedData = $request->validate([
            'user_id' => 'required',
            'indikator_id' => 'required',
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
