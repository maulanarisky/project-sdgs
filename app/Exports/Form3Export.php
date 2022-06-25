<?php

namespace App\Exports;

use App\Models\ProgramMitraSwasta;
use App\Models\Tahun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class Form3Export implements FromView
{
    public function __construct(int $tahunID)
    {
        $this->tahunID = $tahunID;
    }

    public function view(): View
    {
        return view('Menu.ProgramMitraSwasta.table',[
            'tahunSinggle' => Tahun::findOrFail($this->tahunID),
            'output_kegiatans' => ProgramMitraSwasta::with('kegiatan.program.indikator', 'user')->get(),
        ]);
    }
}
