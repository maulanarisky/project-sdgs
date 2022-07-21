<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramMitraSwasta extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun_id');
    }

    public function Tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id');
    }

    public function Indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }

    public function Program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function Kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
}
