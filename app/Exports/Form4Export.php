<?php

namespace App\Exports;

use App\Models\ProgramPelakuUsaha;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Form4Export implements FromView
{
    public function view(): View
    {
        return view('Menu.ProgramPelakuUsaha.table',[
            'program_pelaku_usahas' => ProgramPelakuUsaha::with('user', 'indikator')->get()
        ]);
    }
}
