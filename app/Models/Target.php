<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id');
    }

    public function indikator()
    {
        return $this->hasMany(Indikator::class, 'indikator_id');
    }
    // public function Capaian()
    // {
    //     return $this->hasMany(Capaian::class, 'capaian_id');
    // }
}
