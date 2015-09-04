<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class Dispositivo extends Entity
{
    protected $table        = 'dispositivo';
    protected $fillable     = ['codigo', 'descripcion'];
    // protected $hidden   = ['password', 'remember_token'];



 }
