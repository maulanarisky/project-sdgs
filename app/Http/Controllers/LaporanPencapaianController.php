<?php

namespace App\Http\Controllers;

use App\Models\LaporanPencapaian;
use App\Models\Tahun;
use App\Models\Tujuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LaporanPencapaianController extends Controller
{
   
    public function index()
    {
         return view('Menu.LaporanPencapaian.index', [
             'laporan_pencapaians' => LaporanPencapaian::with('user')->get()
         ]);
    }

    
    public function create()
    {
         return view('Menu.LaporanPencapaian.create',[
            'lp' => LaporanPencapaian::with('user')->get(),
            'tujuans' => Tujuan::all(),
            'tahuns' => Tahun::all()
         ]);
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'tujuan_id' => 'required',
            'tahun_id' => 'required',
            'name_file' => 'required|string',
            'file' => 'required|mimes:doc,docx,pdf|max:2048',
           
        ]);

        if ($request->file('file')) {
            $validatedData['file'] = $request->file('file')->store('file-laporan-pencapaian-tpb');
        }

        LaporanPencapaian::create($validatedData);

        return redirect('/menu/lp')->with('success', ' Berhasil, File di <b>Tambahkan</b>');
    }

   
    public function show(LaporanPencapaian $lp)
    {
        $entry = LaporanPencapaian::where('id', '=', $lp->id)->firstOrFail();
        $pathToFile='storage/' . $lp->file; //$pathToFile=storage_path()."/app/public".$pp->file;
        return response()->download($pathToFile);
    }

    public function edit(LaporanPencapaian $lp)
    {
        return view('Menu.LaporanPencapaian.edit',[
            'lp' => LaporanPencapaian::where('id','=', $lp->id)->first(),
            'tujuans' => Tujuan::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function update(Request $request, LaporanPencapaian $lp)
    {
         $rules = [
            'user_id' => 'required',
            'tujuan_id' => 'required',
            'tahun_id' => 'required',
            'name_file' => 'required|string',
            'file' => 'file|mimes:doc,docx,pdf|max:2048',
        ];
        
        $validatedData = $request->validate($rules);

        if ($request->file('file')) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validatedData['file'] = $request->file('file')->store('file-laporan-pencapaian-tpb');
        }

        LaporanPencapaian::where('id', $lp->id)->update($validatedData);

        return redirect('/menu/lp')->with('success', 'Berhasil di <b>Ubah</b>');
    }

    public function destroy(LaporanPencapaian $lp)
    {
        if ($lp->file) {
            Storage::delete($lp->file);
        }
        LaporanPencapaian::destroy($lp->id);
        return redirect('/menu/lp')->with('success', 'Berhasil di <b>Hapus</b>');
    }
}
