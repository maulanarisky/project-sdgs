<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use App\Models\Indikator;
use App\Models\Tahun;
use App\Models\Target;
use App\Models\Tujuan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'tujuans' => Tujuan::all(),
            'tahun' => Carbon::now()->format('Y'),
        ]);
    }
    
    public function detail($id, $tahunID)
    {
        // ddd($tahunID);
        return view('tpb-detail', [
            'tujuan' => Tujuan::where('id','=', $id)->first(),
            'tahun' => Tahun::where('name', '=', $tahunID)->firstOrFail(),
            'tahunsAll' => Tahun::all(),
            'targets' => Target::all(),
            'indikators' => Indikator::all(),
            'capaians' => Capaian::with('user')->get(),
        ]);
    }
}
