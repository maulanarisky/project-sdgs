<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPelakuUsaha extends Model
{
    use HasFactory;

     protected $guarded =['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }
}
