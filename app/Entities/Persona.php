<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 26/08/2015
 * Time: 12:03 PM
 */
namespace App\Entities;


class Persona extends Entity
{
    protected $table        = 'persona';
    protected $fillable     = ['nombre', 'apellido', 'telefono1', 'telefono2', 'mail'];
    // protected $hidden   = ['password', 'remember_token'];


    public function Funcion()
    {
        return $this->belongsToMany(Funcion::getClass(), 'persona_funcion');
    }



    public function GruposPersona()
    {
        return $this->hasMany(GrupoPersona::getClass(), 'grupos_persona');
    }

}
