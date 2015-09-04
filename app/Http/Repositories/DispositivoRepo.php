<?php
namespace App\Http\Repositories;

use App\Entities\Dispositivo;
use Illuminate\Support\Facades\Auth;

class DispositivoRepo extends BaseRepo {

    public function getModel()
    {
        return new Dispositivo();
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('codigo')->get();

        return $qry;
    }
    public function Delete($id = null)
    {
        $qry = $this->model->find($id)->delete();
    }

}