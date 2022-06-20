<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use App\Models\Indikator;
use App\Models\User;
use Illuminate\Http\Request;

class TentukanSkpdController extends Controller
{
    public function index()
    {
        return view('menu.SKPD.index', [
            'indikators' => Indikator::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('menu.SKPD.edit', [
            'indikator' => Indikator::where('id','=', $id)->first(),
            'users' => User::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tahun_id' => 'required',
            'tujuan_id' => 'required',
            'target_id' => 'required',
            'indikator_id' => 'required',
            'user_id' => 'required',
        ]);

        Capaian::create($validatedData);

        return redirect('/menu/skpd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
