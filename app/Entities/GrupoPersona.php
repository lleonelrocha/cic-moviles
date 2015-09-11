<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 01/09/2015
 * Time: 01:11 PM
 */
namespace App\Entities;

class GrupoPersona extends Entity{

    protected $table = 'grupos_persona';
    protected $fillable     = ['persona_id', 'grupo_id', 'funcion_id' ];

    public function Grupos()
    {
        return $this->belongsTo(Grupo::getClass(),   'grupo_id');
    }

    public function Persona()
    {
        return $this->belongsTo(Persona::getClass(), 'persona_id');
    }

    public function Funcion()
    {
        return $this->belongsTo(Funcion::getClass(), 'funcion_id');
    }

}