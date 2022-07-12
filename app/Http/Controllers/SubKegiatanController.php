<?php

namespace App\Http\Controllers;

use App\Models\ProgramPemerintahDaerah;
use App\Models\SubKegiatan;
use App\Models\Tahun;
use App\Models\User;
use Illuminate\Http\Request;

class SubKegiatanController extends Controller
{
    public function index()
    {
        return view('menu.subkegiatan.index', [
            'subkegiatans' => SubKegiatan::all(),
        ]);
    }

    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    
    public function show(SubKegiatan $subKegiatan)
    {
        //
    }

 
    public function edit(SubKegiatan $subkegiatan)
    {
        return view('menu.subkegiatan.edit', [
            'subkegiatan' => SubKegiatan::where('id','=', $subkegiatan->id)->first(),
            'users' => User::all()
        ]);
    }

    public function update(Request $request, SubKegiatan $subkegiatan)
    {
        $rules = $request->validate([
            'program' => 'required',
            'kegiatan' => 'required',
            'kode_sub_kegiatan' => 'required',
            'name_sub_kegiatan' => 'required',
            'indikator' => 'required',
            'satuan' => 'required',
            'user_id' => 'required'
        ]);
        
        SubKegiatan::where('id', $subkegiatan->id)->update($rules);

        //masih gagal
        $cekSubKegitan = ProgramPemerintahDaerah::where([
            ['sub_kegiatan_id', '=', $subkegiatan->id]
        ])->first();
        
        if ($cekSubKegitan) {
            $rulesSubKegiatan = $request->validate([
                'sub_kegiatan_id' => 'required',
                'user_id' => 'required',
            ]);
            // dd($cekSubKegitan);
            ProgramPemerintahDaerah::where('sub_kegiatan_id', $subkegiatan->id)->update($rulesSubKegiatan);   
        } else {
            $tahuns = Tahun::all();
            foreach($tahuns as $tahun){
                $validatedsubkegiatan = $request->validate([
                    'sub_kegiatan_id' => 'required',
                    'user_id' => 'required',
                ]);

                $validatedsubkegiatan['tahun_id'] = $tahun->id;
                ProgramPemerintahDaerah::create($validatedsubkegiatan);
            }
        } 
        return redirect('/menu/subkegiatan')->with('success', ' Berhasil di <b>Ubah</b>');
    }

  
    public function destroy(SubKegiatan $subkegiatan)
    {
        //
    }
}
