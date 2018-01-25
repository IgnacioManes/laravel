<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    protected $fillable = ['nombre','apellido','documento'];

    protected $table = 'empleados';

    public function direccionGeneral()
    {
        return $this->belongsTo(DireccionGeneral::class,'id_dg');
    }

    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class,'proyectos_empleados',
            'id_empleado','id_proyecto')->withTimestamps();
    }
}
