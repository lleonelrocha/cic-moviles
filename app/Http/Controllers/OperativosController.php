<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 03/09/2015
 * Time: 01:54 PM
 */
namespace App\Http\Controllers;


use App\Http\Repositories\OperativoRepo;
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

    public function getNew(){

        return view('operativos.operativos_form');
    }

    public function postNew(OperativoRequest $request)
    {

        $data = $request->only('fecha_desde', 'fecha_hasta', 'horarios','direccion', 'posicion', 'detalle');

        $this->operativoRepo->create($data);
        //Agrego funcion a persona
//        $persona = Persona::all();
//        $persona->last()->Funcion()->sync(array($funcion_id));
//        //$profiles= Profile::find(2);
//        //$profiles->roles()->sync(array(3));
//        return redirect()->back()->with('msg_ok', 'Persona creada correctamente.');


    }

//    public function getEdit($id = null)
//    {
//        $data['funcion'] = Funcion::lists('funcion', 'id');
//        $data['model'] = $this->personaRepo->getModel()->find($id);
//        return view('personas.personas_form')->with($data);
//    }
//
//    public function postEdit($id = null ,PersonaCreateRequest $request)
//    {
//        $data = $request ->only('nombre', 'apellido', 'telefono1', 'telefono2', 'mail');
//        $funcion_id     = Input::get('funcion_id');
//        $model = $this->personaRepo->find($id);
//        $model->Funcion()->sync(array($funcion_id));
//        $this->personaRepo->edit($model,$data);
//        return redirect()->back()->with('msg_ok', 'Persona editada correctamente.');
//
//    }
//
//
    //delete
    public function getDelete($id  = null)
    {
        $model = $this->operativoRepo->find($id);
        $this->$model->Delete($id);
        return redirect()->back()->withErrors('Eliminado Correctamente');

    }

}