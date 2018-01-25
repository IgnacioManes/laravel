<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 * @package App
 * @property string $nombre
 * @property string $fecha_entrega
 */
class Proyecto extends Model
{
    protected $fillable=['nombre','fecha_entrega'];

    protected $table = 'proyectos';

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class,'proyectos_empleados',
            'id_proyecto','id_empleado')->withTimestamps();
    }

}
