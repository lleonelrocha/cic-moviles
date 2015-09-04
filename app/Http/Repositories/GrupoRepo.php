<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 26/08/2015
 * Time: 12:07 PM
 */
namespace App\Http\Repositories;

use App\Entities\Grupo;
use App\Entities\GrupoPersona;


class GrupoRepo extends BaseRepo {

    public function getModel()
    {
        return new Grupo();
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