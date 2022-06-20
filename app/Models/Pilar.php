<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tujuan()
    {
        return $this->hasMany(Tujuan::class, 'tujuan_id');
    }
}
