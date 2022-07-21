<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function target()
    {
        return $this->belongsTo(Target::class, 'target_id');
    }
    
    public function tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'tujuan_id');
    }

    public function capaian()
    {
        return $this->hasMany(Capaian::class);
    }
    public function SubKegiatan()
    {
        return $this->hasMany(SubKegiatan::class);
    }
    public function available_capaian() {
        return $this->capaian()->where('available','=', 1);
    }
}
