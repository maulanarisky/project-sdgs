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
        return view('Menu.Capaian.table', [
            'capaians' => Capaian::with('indikator.target.tujuan', 'tahun', 'user')->get(),
            'tahuns' => Tahun::all(),
            'tahunSinggle' => Tahun::findOrFail($this->tahunID),
        ]);
    }
}
