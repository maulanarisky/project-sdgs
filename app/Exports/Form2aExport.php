<?php

namespace App\Exports;

use App\Models\ProgramPemerintahPusat;
use App\Models\Tahun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Form2aExport implements FromView
{
    public function __construct(int $tahunID)
    {
        $this->tahunID = $tahunID;
    }

   public function view(): View
   {
     return view('Menu.ProgramPemerintahPusat.table',[
            'tahunSinggle' => Tahun::findOrFail($this->tahunID),
            'program_pemerintah_pusats' => ProgramPemerintahPusat::all()
        ]);
   }
}
