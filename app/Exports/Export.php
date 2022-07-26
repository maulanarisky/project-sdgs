<?php

namespace App\Exports;

use App\Models\Capaian;
use App\Models\Tahun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class Export implements FromView
{
    public function __construct(int $tahunID)
    {
        $this->tahunID = $tahunID;
    }

    public function view(): View
    {
        return view('Menu.Capaian.table',[
        'tahunSinggle' => Tahun::findOrFail($this->tahunID),
        'capaians' => Capaian::all()
        ]);
    }
}
