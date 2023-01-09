<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;
    //columnas
    protected $table = "tareas";
    protected $fillable = ["nombre", "descripcion", "finalizada", "fecha_limite", "urgencia"];
    protected $dates = ["fecha_limite"]; //para darle distintos formatos a la fecha
    public const URGENCIAS = ['Baja', 'Normal', 'Alta'];
    public function urgencia(){
        return self::URGENCIAS[ $this->urgencia];
    }
    public function estafinalizada(){
        return $this->finalizada == 1 ? 'Si' : 'No';
    }
}
