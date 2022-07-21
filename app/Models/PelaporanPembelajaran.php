<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelaporanPembelajaran extends Model
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
}
