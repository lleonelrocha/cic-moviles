<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:42
 */

namespace App\Http\Repositories;

use App\Entities\User;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('name')
                ->paginate($paginate);

        return $qry;
    }

    public function SearchUser($userName = null)
    {
        $qry = $this->model->where('email',$userName)->first();

        return $qry;
    }

    public function create($data = null)
    {
        $qry                = new $this->model();
        $qry->email         = $data['email'];
        $qry->profiles_id   =  4;
        $qry->save();

        return $qry;
    }

}