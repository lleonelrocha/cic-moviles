<?php


namespace App\Http\Repositories;

use App\Entities\Modulo;
use App\Entities\ModuloPermiso;
use Illuminate\Support\Facades\Auth;

class ModuloRepo extends BaseRepo {

    public function getModel()
    {
        return new Modulo();
    }

    public function buscarRoles($modulo_name = null , $section = null)
    {
        $model          = $this->model->where('modulo','dispositivo')->first();
        $modelPermiso   = ModuloPermiso::where('modulo_id',$model->id)
                            ->where('profiles_id', Auth::user()->profiles_id)
                            ->first();

        return $modelPermiso->$section;


    }


    public function buscar($model = null)
    {
        $data = $this->model->where('modulo','dispositivo')->first();

        return $data;
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('modulo')
            ->paginate($paginate);

        return $qry;
    }


}