<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 03/09/2015
 * Time: 01:56 PM
 */

namespace App\Entities;


class OperativoFuncion extends Entity
{
    protected $table        = 'operativo_funcion';
    protected $fillable     = ['funcion'];

    //Relaciones

    public function Operativo()
    {
        return $this->belongsTo(Operativo::getClass());
    }

}
