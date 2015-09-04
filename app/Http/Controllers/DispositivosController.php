<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:51
 */

namespace App\Http\Controllers;


use App\Http\Repositories\DispositivoRepo;
use App\Http\Helpers\Helper;

use App\Http\Requests\DispositivoRequest;
use Illuminate\Http\Request;


class DispositivosController extends Controller {

    protected $dispositivoRepo;

    public function __construct(DispositivoRepo $dispositivoRepo)
    {
        $this->dispositivoRepo = $dispositivoRepo;
    }

    public function getIndex()
    {
        $data['model'] = $this->dispositivoRepo->ListAndPaginate(2) ;

        return view('Dispositivos.dispositivos_list')->with($data);
    }

    public function getEdit($id = null)
    {
        $data['model'] = $this->dispositivoRepo->getModel()->find($id);
        return view('Dispositivos.dispositivos_form')->with($data);
    }


    public function getNew(){

        return view('dispositivos/dispositivos_form');
    }

    public function postNew(DispositivoRequest $request)
    {

        $data['codigo']         = $request->codigo;
        $data['descripcion']    = $request->descripcion;

        $this->dispositivoRepo->create($data);

        return redirect('dispositivos');
    }

    public function postEdit($id = null, DispositivoRequest $request)
    {
        $data['codigo']      = $request->codigo;
        $data['descripcion'] = $request->descripcion;

        $model = $this->dispositivoRepo->getModel()->find($id);
        $model->fill($data);
        $model->save();

        return redirect('dispositivos');
    }

    //delete
    public function getDelete($id  = null)
    {
        $this->dispositivoRepo->Delete($id);

        return redirect()->back()->withErrors('Eliminado Correctamente');
    }

}