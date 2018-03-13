<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Empleado
 * @package App
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $documento
 */
class Empleado extends Model
{

    protected $fillable = ['nombre','apellido','documento'];

    protected $table = 'empleados';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function direccionGeneral()
    {
        return $this->belongsTo(DireccionGeneral::class,'id_dg');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class,'proyectos_empleados',
            'id_empleado','id_proyecto')->withTimestamps();
    }
}
