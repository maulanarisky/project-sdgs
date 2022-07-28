<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateKegiatanRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Redirect;

class KegiatanController extends Controller
{
    
    public function index()
    {
        return view('Menu.Kegiatan.index',[
            'kegiatans' => Kegiatan::with('user')->get()
        ]);
    }

    public function create()
    {
         return view('Menu.Kegiatan.create', [
            'programs' => Program::all()
        ]);
    }

    
    public function store(Request $request)
    {
          $validatedData = $request->validate([
            'user_id' => 'required',
            'program_id' => 'required',
            'name_kegiatan' => 'required|string',
        ]);


        Kegiatan::create($validatedData);
        return redirect('/menu/kegiatan')->with('success', ' Kegiatan Berhasil di <b>Tambahkan</b>');
    }

    
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    public function edit(Kegiatan $kegiatan)
    {
         return view('Menu.Kegiatan.edit',[
            'kegiatan' => Kegiatan::where('id','=', $kegiatan->id)->first(),
            'programs' => Program::all()
        ]);
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
       $validatedData = $request->validate([
            'user_id' => 'required',
            'program_id' => 'required',
            'name_kegiatan' => 'required|string',
        ]);
        

        Kegiatan::where('id', $kegiatan->id)->update($validatedData);
        return redirect('/menu/kegiatan')->with('success', ' Kegiatan Berhasil di <b>Ubah</b>');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        Kegiatan::destroy($kegiatan->id);
        return redirect('/menu/kegiatan')->with('success', ' Kegiatan Berhasil di <b>Hapus</b>');
    }
}
