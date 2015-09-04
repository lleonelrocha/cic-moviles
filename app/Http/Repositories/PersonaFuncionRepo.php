<?php
namespace App\Http\Repositories;

use App\Entities\Funcion;
use Illuminate\Support\Facades\Auth;

class PersonaFuncionRepo extends BaseRepo {

    public function getModel()
    {
        return new Funcion();
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->get();
        return $qry;
    }

    public function Delete($id = null)
    {
        $qry = $this->model->find($id)->delete();
    }

}