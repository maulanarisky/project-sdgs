<?php

namespace App\Exports;

use App\Models\RencanaTindakLanjut;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Form5Export implements FromView
{

    public function view(): View
    {
        return view('Menu.RencanaTindakLanjut.table', [
            'rencana_tindak_lanjuts' => RencanaTindakLanjut::with('user', 'tujuan')->get()
        ]);
    }
}
