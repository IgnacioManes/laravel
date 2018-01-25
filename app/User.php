<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        /*'name',*/ 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function empleado()
    {
        return $this->hasOne(Empleado::class, "id_user");
    }

    public function estaSuscripto($proyecto){
        return $this->empleado()->first()->proyectos()->get()->where("id",$proyecto->id)->first();
    }
}
