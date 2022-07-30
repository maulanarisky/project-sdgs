<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    use HasFactory;
     protected $guarded = ["id"];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
     public function ProgramPemerintahDaerah()
    {
        return $this->hasMany(ProgramPemerintahDaerah::class);
    }
    public function Indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }
    public function Programkabkota()
    {
        return $this->hasMany(ProgramKabKota::class, 'kabkota_id');
    }
    public function available_ProgramPemerintahDaerah() {
        return $this->ProgramPemerintahDaerah()->where('available','=', 1);
    }
}
