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

    public function Kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
}
