<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use App\Models\Indikator;
use App\Models\PelaporanPembelajaran;
use App\Models\ProgramPemerintahDaerah;
use App\Models\ProgramPemerintahPusat;
use App\Models\RencanaTindakLanjut;
use App\Models\Tahun;
use App\Models\Tujuan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('Menu.Dashboard.index', [
            'users' => User::Where('role_id', '!=', 1)->count(),
            'tujuans' => Tujuan::all()->count(),
            'indikators' => Indikator::all()->count()
            
        ]);
    }
    public function capaian($tahunID)
    {
        return view('menu.dashboard.capaian.index', [
            'capaians' => Capaian::all(),
            'tahunSinggle' => Tahun::findOrFail($tahunID),
        ]);
    }

    public function daerah()
    {
        return view('menu.dashboard.daerah.index', [
            'program_pemerintah_daerahs' => ProgramPemerintahDaerah::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function pusat()
    {
        return view('menu.dashboard.pusat.index', [
            'program_pemerintah_pusats' => ProgramPemerintahPusat::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function rtl()
    {
        return view('menu.dashboard.RencanaTindakLanjut.index', [
            'rencana_tindak_lanjuts' => RencanaTindakLanjut::all(),
            'tahuns' => Tahun::all()
        ]);
    }

    public function laporanPembelajaran()
    {
        return view('menu.dashboard.LaporanPembelajaran.index', [
            'pelaporan_pembelajarans' => PelaporanPembelajaran::all(),
            'tahuns' => Tahun::all()
        ]);
    }
}
