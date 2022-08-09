<?php

namespace App\Exports;

use App\Models\ProgramKabKota;
use App\Models\Tahun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Form2bkabkotaExport implements FromView
{
    public function __construct(int $tahunID)
    {
        $this->tahunID = $tahunID;
    }
    
    public function view(): View
    {
      return view('Menu.ProgramKabKota.table',[
            'program_kab_kotas' => ProgramKabKota::all(),
            'tahunSinggle' => Tahun::findOrFail($this->tahunID),
        ]);
      
    }
}
