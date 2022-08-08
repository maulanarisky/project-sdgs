<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use App\Models\Kabkota;
use App\Models\ProgramKabKota;
use App\Models\Tahun;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KabkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Menu.SubkegiatanKabkota.index', [
            'kabkotas' => Kabkota::all(),
            // 'pkk' => ProgramKabKota::all(),
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

   
    public function show(Kabkota $kabkotum)
    {
        // $pilih = Kabkota::where('id', '=', $kabkotum->id)->get();
        // $tahuns = Tahun::all();

        // foreach($tahuns as $tahun){
        //     $validatedkabkota['kabkota_id'] = $kabkotum->id;
        //     $validatedkabkota['user_id'] = Auth::user()->id;
        //     $validatedkabkota['tahun_id'] = $tahun->id;

        //     ProgramKabKota::create($validatedkabkota);
        // }
        // return redirect('/menu/pkabkota/7')->with('success', "Subkegiatan : <strong>{$kabkotum->name_subkegiatan_kabkota} </strong> Berhasil DiTambahkan "  ); 
    
    }

   
    public function edit(Kabkota $kabkotum)
    {
        //  return view('Menu.SubkegiatanKabkota.edit', [
        //     'kab' => Kabkota::where('id','=', $kabkotum->id)->first(),
        //     'indikators' => Indikator::all(),
        //     'users' => User::all()
        // ]);
    }

  
    public function update(Request $request, Kabkota $kabkotum)
    {
    //       $rules = $request->validate([
    //         'program_kabkota' => 'required',
    //         'kegiatan_kabkota' => 'required',
    //         'kode_subkegiatan_kabkota' => 'required',
    //         'name_subkegiatan_kabkota' => 'required',
    //         'indikator_kabkota' => 'required',
    //         'satuan' => 'required',
    //         'user_id' => '',
    //         'indikator_id' => 'required'
    //    ]);
    //    Kabkota::where('id', $kabkotum->id)->update($rules);
           
    //        $cekkabkota = ProgramKabKota::where([
    //        ['kabkota_id', '=', $kabkotum->id]
    //        ])->first();
            
            
    //         if ($cekkabkota) {
    //             $rulesKabkota = $request->validate([
    //                 'kabkota_id' => 'required',
    //                 'user_id' => 'required',
    //             ]);
               
    //             ProgramKabKota::where('kabkota_id', $kabkotum->id)->update($rulesKabkota);   
    //         } else {
    //             $tahuns = Tahun::all();
    //             foreach($tahuns as $tahun){
    //                 $validatedkabkota = $request->validate([
    //                     'kabkota_id' => 'required',
    //                     'user_id' => 'required',
    //                 ]);
    
    //                 $validatedkabkota['tahun_id'] = $tahun->id;
    //                 ProgramKabKota::create($validatedkabkota);
    //             }
    //         } 
        
    //     return redirect('/menu/kabkota')->with('success', ' Berhasil di <b>Ubah</b>');
    }

    
    public function destroy(Kabkota $kabkotum)
    {
        //
    }

    
}
