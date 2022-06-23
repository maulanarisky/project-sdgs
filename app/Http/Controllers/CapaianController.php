<?php

namespace App\Http\Controllers;

use App\Exports\Form1Export;
use App\Models\Capaian;
use App\Models\Indikator;
use App\Models\Tahun;
use App\Models\Target;
use App\Models\Tujuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class CapaianController extends Controller
{
    public function form1Export($tahunID){
        return Excel::download(new Form1Export($tahunID), 'form 1.xlsx');
    }
    
    public function index($tahunID)
    {
        return view('menu.capaian.index', [
            'capaians' => Capaian::with('indikator.target.tujuan', 'tahun', 'user')->get(),
            'tahuns' => Tahun::all(),
            'tahunSinggle' => Tahun::findOrFail($tahunID),
            
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('menu.capaian.edit', [
            'capaian' => Capaian::where('id','=', $id)->first(),
        ]);
    }

    public function update(Request $request, Capaian $capaian, Indikator $indikator)
    {
        $rulesCapaian = [
            'baseline' => 'required',
            'target_awal' => 'required',
            'capaian' => 'required',
            'status' => 'required'
        ];

        $validatedDataCapaian = $request->validate($rulesCapaian);

        Capaian::where('id', $capaian->id)->update($validatedDataCapaian);

        return Redirect::back()->with('success', ' Berhasil di <b>Ubah</b>');
    }

    public function destroy(Capaian $capaian)
    {
        Capaian::destroy($capaian->id);
        return redirect('/menu/capaian/7');
    }

    public function getTargets($id)
    {
        $targets= DB::table('targets')->where('tujuan_id', $id)->get();
        return response()->json($targets);

    }

    public function getIndikators($id)
    {
        $indikators = DB::table('indikators')->where('target_id', $id)->get();
        return response()->json($indikators);
    }
}
