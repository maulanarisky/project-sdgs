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

 
}
