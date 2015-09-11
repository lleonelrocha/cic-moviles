<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:51
 */

namespace App\Http\Controllers;
use App\Http\Repositories\OperativoRepo;
use App\Entities\Operativo;
//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;


class HomeController extends Controller {

  public function getIndex()
  {
      $date = date('Y-m-d');
      $data['operativos'] = Operativo::where('fecha_hasta','>=' , $date)->get();

      return view('home')->with($data);
  }



}