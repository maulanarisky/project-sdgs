<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use App\Models\Program;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Redirect;

class ProgramController extends Controller
{
    
    public function index()
    {
        return view('Menu.Program.index',[
            'programs' => Program::with('user')->get()
        ]);
    }

    
    public function create()
    {
         return view('Menu.Program.create',[
            'programs' => Program::with('user')->get()
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'kode_program' => 'required',
            'name_program' => 'required|string'
        ]);

        Program::create($validatedData);
         return redirect('/menu/program')->with('success', ' <b>Program</b> Berhasil di <b>Tambahkan</b>');

        // return redirect()-->with('success', ' Progra m Berhasil di <b>Tambahkan</b>');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
          return view('Menu.Program.edit',[
            'program' => Program::where('id','=', $id)->first()

        ]);
    }

   
    public function update(Request $request, Program $program)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'kode_program' => 'required',
            'name_program' => 'required|string'
        ]);

        Program::where('id', $program->id)->update($validatedData);

        return redirect('/menu/program')->with('success', ' Program Berhasil di <b>Ubah</b>');
    }

   
    public function destroy(Program $program)
    {
        Program::destroy($program->id);
        return redirect('/menu/program')->with('success', ' Program Berhasil di <b>Hapus</b>');
    }
}
