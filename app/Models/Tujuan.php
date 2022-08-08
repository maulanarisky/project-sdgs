<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    public function pilar()
    {
        return $this->belongsTo(Pilar::class, 'pilar_id');
    }
    
    public function target()
    {
        return $this->hasMany(Target::class, 'target_id');
    }
    public function indikator()
    {
        return $this->hasMany(Indikator::class, 'indikator_id');
    }
    public function PelaporanPembelajaran()
    {
        return $this->hasMany(PelaporanPembelajaran::class, 'tujuan_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
