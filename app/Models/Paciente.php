<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'ci', 'whatsapp', 'fecha_nac'];


    public function consultas() {
        return $this->hasMany(Consulta::class);
    }

    // $paciente->edad  <---- quiero que me muestre la edad

    public function getEdadAttribute()
    {
        // naci en diciembre del 2000, estamos en 2021
        $ahora = new DateTime();
        $anio_actual = (int)$ahora->format('Y');
        $mes_actual = (int)$ahora->format('m');
        $dia_actual = (int)$ahora->format('d');

        list($anio_nac, $mes_nac, $dia_nac) = explode('-', $this->fecha_nac);
        $anio_nac = (int)$anio_nac;
        $mes_nac = (int)$mes_nac;
        $dia_nac = (int)$dia_nac;

        // Algoritmo para calcular la edad
        $aa = $anio_actual - $anio_nac;
        $mm = $mes_actual - $mes_nac;
        $dd = $dia_actual - $dia_nac;

        if ($dd < 0) {
            $mm--;
        }
        if ($mm < 0) {
            $aa--;
        }
        return $aa;
    }
}
