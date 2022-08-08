<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPemerintahDaerah extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
     public function SubKegiatan()
    {
        
        return $this->belongsTo(SubKegiatan::class, 'sub_kegiatan_id');
    }

    public function Tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun_id');
    }
    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }
    public function target()
    {
        return $this->belongsTo(Target::class, 'target_id');
    }
    public function tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id');
    }

 
}
