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
            'capaians' => Capaian::all(),
            'tahuns' => Tahun::all(),
            'tahunSinggle' => Tahun::findOrFail($tahunID),
            
        ]);
    }

    public function create()
    {
        return view('menu.capaian.create', [
            // 'capaians' => Capaian::all(),
            'tahuns' => Tahun::all(),
            'tujuans' => Tujuan::all(),
            'targets' => Target::all(),
            'indikators' => Indikator::all(),
            'users' => User::all()

        ]);
    }

    public function store(Request $request)
    {
        
        $tahun = Tahun::all();
        $validatedData = $request->validate([
            // 'tahun_id' => 'required',
            'tujuan_id' => 'required',
            'target_id' => 'required',
            'indikator_id' => 'required',
            // 'deskripsi' => 'required|string',
            // 'satuan' => 'string',
            // 'baseline' => 'float',
            // 'target_awal' => 'float',
            // 'capaian' => 'float',
            // 'status' => 'string',
            'user_id' => 'required',
        ]);
        foreach($tahun as $th){
            $validatedData['tahun_id'] = $th->id;
            $th = Capaian::create($validatedData);
        }

        return redirect('/menu/capaian');
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
