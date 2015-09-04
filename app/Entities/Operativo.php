<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 03/09/2015
 * Time: 01:56 PM
 */

namespace App\Entities;


class Operativo extends Entity
{
    protected $table        = 'operativo';
    protected $fillable     = ['fecha_desde', 'fecha_hasta', 'horarios','direccion','posicion', 'detalle', 'operativo_estado_id'                                   ];


}
