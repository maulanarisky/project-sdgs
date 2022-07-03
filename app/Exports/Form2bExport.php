<?php

namespace App\Exports;

use App\Models\Tahun;
use App\Models\ProgramPemerintahDaerah;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Form2bExport implements FromView
{
    public function __construct(int $tahunID)
    {
        $this->tahunID = $tahunID;
    }
    public function view(): View
    {
      return view('Menu.ProgramPemerintahDaerah.table',[
            'program_pemerintah_daerahs' => ProgramPemerintahDaerah::all(),
            'tahunSinggle' => Tahun::findOrFail($this->tahunID),
        ]);
      
    }
    
        
}
