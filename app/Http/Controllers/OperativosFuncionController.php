<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 03/09/2015
 * Time: 01:54 PM
 */
namespace App\Http\Controllers;
use App\Http\Repositories\OperativoFuncionRepo;
use Illuminate\Http\Request;
use App\Http\Requests\OperativoRequest;

class OperativosFuncionController extends Controller
{

    protected $operativoFuncionRepo;

    public function __construct(OperativoFuncionRepo $operativoFuncionRepo)
    {
        $this->operativoFuncionRepo = $operativoFuncionRepo;
    }

    public function getIndex()
    {
        $data['model'] = $this->operativoFuncionRepo->ListAndPaginate(2);
        return view('operativoFuncion.operativo_funcion_list')->with($data);
    }

    public function getNew(){

        return view('operativoFuncion.operativo_funcion_form');
    }

    public function postNew(OperativoRequest $request)
    {
        $data = $request->only('fecha_desde', 'fecha_hasta', 'horarios', 'direccion', 'posicion', 'detalle');
        $this->operativoRepo->create($data);
    }

    public function getEdit()
    {
        return view('operativoFuncion.operativo_funcion_form');
    }


    public function getDelete($id  = null)
    {

        $model = $this->operativoRepo->find($id);
        $this->$model->Delete($id);
        return redirect()->back()->withErrors('Eliminado Correctamente');
    }

}