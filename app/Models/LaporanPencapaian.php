<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPencapaian extends Model
{
    use HasFactory;
     protected $guarded =['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id');
    }
    public function Tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun_id');
    }
}
