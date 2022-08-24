<?php

namespace App\Exports;

use App\Models\PelaporanPembelajaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Contracts\View\View;

class Form6Export implements FromView
{
    
    public function view(): View
    {
        return view('Menu.PelaporanPembelajaran.table', [
            'pelaporan_pembelajarans' => PelaporanPembelajaran::with('tujuan','user')->get()
        ]);
    }
}
