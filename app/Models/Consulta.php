<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['diagnostico', 'receta', 'paciente_id'];

    public function paciente() {
        return $this->belongsTo(Paciente::class);
    }
}
