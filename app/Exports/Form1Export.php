<?php

namespace App\Exports;

use App\Models\Capaian;
use App\Models\Tahun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class Form1Export implements FromView
{
    public function __construct(int $tahunID)
    {
        $this->tahunID = $tahunID;
    }

    public function view(): View
    {
        return view('menu.capaian.table', [
            'capaians' => Capaian::all(),
            'tahuns' => Tahun::all(),
            'tahunSinggle' => Tahun::findOrFail($this->tahunID),
        ]);
    }
}
