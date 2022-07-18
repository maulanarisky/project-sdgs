<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKabKota extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
     public function Kabkota()
    {
        return $this->belongsTo(Kabkota::class, 'kabkota_id');
    }

    public function Tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun_id');
    }

}
