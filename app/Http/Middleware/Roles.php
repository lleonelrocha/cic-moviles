<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
use App\Http\Repositories\ModuloRepo;

class Roles
{
    protected $roles;
    protected $moduloRepo;

    public function __construct(Guard $roles, ModuloRepo $moduloRepo)
    {
        $this->roles        = $roles;
        $this->moduloRepo   = $moduloRepo;
    }

    public function handle($request, Closure $next , $data = null )
    {
        $data       = explode('-',$data);
        $modulo     = $data[0];
        $section    = $data[1];

       if($this->moduloRepo->buscarRoles($modulo , $section) != '1')
           //return redirect()->intended();
            return "Acceso restrigido";

        return $next($request);
    }
}
