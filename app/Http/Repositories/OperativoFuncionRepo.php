<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 03/09/2015
 * Time: 01:58 PM
 */

namespace App\Http\Repositories;
use App\Entities\OperativoFuncion;


class OperativoFuncionRepo extends BaseRepo {

    public function getModel()
    {
        return new OperativoFuncion();
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('id')->get();
        return $qry;
    }

    public function Delete($id = null)
    {
        $qry = $this->model->find($id)->delete();
    }

}