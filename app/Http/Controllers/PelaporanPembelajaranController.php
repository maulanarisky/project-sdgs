<?php

namespace App\Http\Controllers;

use App\Models\PelaporanPembelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePelaporanPembelajaranRequest;
use App\Models\Tujuan;
use Barryvdh\DomPDF\PDF;

class PelaporanPembelajaranController extends Controller
{
   
    public function index()
    {
         return view('Menu.PelaporanPembelajaran.index', [
             'pelaporan_pembelajarans' => PelaporanPembelajaran::with('user')->get()
         ]);
    }

  
    public function create()
    {
         return view('Menu.PelaporanPembelajaran.create',[
             'pelaporan_pembelajarans' => PelaporanPembelajaran::with('user')->get(),
             'tujuans' => Tujuan::all()
         ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tujuan_id' => 'required',
            'user_id' => 'required',
            'name_program' => 'required|string',
            'lokasi' => 'required',
            'waktu' => 'required',
            'latar_belakang' => 'required',
            'proses_pelaksanaan' => 'required',
            'hasil' => 'required',
            'dampak' => 'required',
            'tantangan' => 'required',
            'pembelajaran' => 'required',
            'peluang_replikasi' => 'required',
            'file' => 'required|mimes:doc,docx,pdf|max:2048',
           
        ]);

        if ($request->file('file')) {
            $validatedData['file'] = $request->file('file')->store('file-laporan-pembelajaran');
        }

        PelaporanPembelajaran::create($validatedData);

        return redirect('/menu/pp')->with('success', ' Berhasil, File di <b>Tambahkan</b>');
    }

  
    public function show(PelaporanPembelajaran $pp)
    {
        return view('menu.PelaporanPembelajaran.show', [
            'pp' => PelaporanPembelajaran::findOrFail($pp->id)
        ]);
       
    }

    
    public function edit(PelaporanPembelajaran $pp)
    {
        return view('menu.PelaporanPembelajaran.edit',[
            'pp' => PelaporanPembelajaran::where('id','=', $pp->id)->first(),
            'tujuans' => Tujuan::all()
        ]);
    }

  
    public function update(Request $request, PelaporanPembelajaran $pp)
    {
        $rules = [
             'tujuan_id' => 'required',
            'user_id' => 'required',
            'name_program' => 'required|string',
            'lokasi' => 'required',
            'waktu' => 'required',
            'latar_belakang' => 'required',
            'proses_pelaksanaan' => 'required',
            'hasil' => 'required',
            'dampak' => 'required',
            'tantangan' => 'required',
            'pembelajaran' => 'required',
            'peluang_replikasi' => 'required',
            'file' => 'required|mimes:doc,docx,pdf|max:2048',
        ];
        
        $validatedData = $request->validate($rules);

        if ($request->file('file')) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validatedData['file'] = $request->file('file')->store('img-laporan-pembelajaran');
        }

        PelaporanPembelajaran::where('id', $pp->id)->update($validatedData);

        return redirect('/menu/pp')->with('success', 'Berhasil di <b>Ubah</b>');
    }

   
    public function destroy(PelaporanPembelajaran $pp)
    {
        if ($pp->file) {
            Storage::delete($pp->file);
        }
        PelaporanPembelajaran::destroy($pp->id);
        return redirect('/menu/pp')->with('success', 'Berhasil di <b>Hapus</b>');
    }

    public function download($id)
    {
        $entry = PelaporanPembelajaran::findOrFail($id);
        $pathToFile='storage/' . $entry->file; //$pathToFile=storage_path()."/app/public".$pp->file;
        return response()->download($pathToFile);
       
    }
    // public function cetak($id)
    // {
    //     return view('Menu.PelaporanPembelajaran.pdf', [
    //         'pp' => PelaporanPembelajaran::findOrFail($id)
    //     ]);
    // }

  
} 
