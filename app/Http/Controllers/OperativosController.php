<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 03/09/2015
 * Time: 01:54 PM
 */
namespace App\Http\Controllers;
use App\Http\Repositories\OperativoRepo;
use App\Entities\Operativo;
use Illuminate\Http\Request;
use App\Http\Requests\OperativoRequest;

class OperativosController extends Controller
{

    protected $operativoRepo;

    public function __construct(OperativoRepo $operativoRepo)
    {
        $this->operativoRepo = $operativoRepo;
    }

    public function getIndex()
    {
        $data['model'] = $this->operativoRepo->ListAndPaginate(2);
        return view('operativos.operativos_list')->with($data);
    }

    public function getNew()
    {
        return view('operativos.operativos_form');
    }

    public function postNew(OperativoRequest $request)
    {
        $data = $request->only('fecha_desde', 'fecha_hasta', 'horarios', 'direccion', 'posicion', 'detalle', 'operativo_estado_id');
        $this->operativoRepo->create($data);
    }
    public function getDelete($id  = null)
    {
          $this->operativoRepo->Delete($id);
          return redirect()->back()->withErrors('Eliminado Correctamente');
    }


}