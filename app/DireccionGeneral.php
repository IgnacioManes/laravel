<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DireccionGeneral
 * @package App
 * @var $nombre
 */
class DireccionGeneral extends Model
{
    protected $fillable = ['nombre'];

    protected $table = 'direcciones_generales';

    public function empleados()
    {
        return $this->hasMany(Empleado::class,'id_dg');
    }
}
