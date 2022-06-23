<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capaian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }
    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
