<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 27/08/2015
 * Time: 11:30 AM
 */

namespace App\Entities;


class Funcion extends Entity
{
    protected $table        = 'funcion';
    protected $fillable     = ['funcion'];

    public function Persona()
    {
        return $this->belongsTo(Persona::getClass(), 'persona_funcion');
    }

    public function GruposPersona()
    {
        return $this->hasMany(GrupoPersona::getClass());
    }


}
