<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 27/08/2015
 * Time: 11:30 AM
 */

namespace App\Entities;


class Grupo extends Entity
{
    protected $table        = 'grupos';
    protected $fillable     = ['nombre'];

    public function GruposPersona()
    {
        return $this->hasMany(GrupoPersona::getClass(), 'grupos_persona');
    }


}
