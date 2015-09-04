<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 26/08/2015
 * Time: 12:17 PM
 */
namespace App\Http\Controllers;


use App\Http\Repositories\PersonaRepo;
use App\Entities\Persona;
use App\Entities\Funcion;
use App\Http\Requests\PersonaCreateRequest;
use Illuminate\Support\Facades\Request;
use Input;
class PersonasController extends Controller
{

    protected $personaRepo;

    public function __construct(PersonaRepo $personaRepo)
    {
        $this->personaRepo = $personaRepo;
    }

    public function getIndex()
    {

        $data['model'] = $this->personaRepo->ListAndPaginate(2);
        return view('personas.personas_list')->with($data);
    }

    public function getNew(){

        $data['funcion'] = Funcion::lists('funcion', 'id');
        return view('personas.personas_form')->with($data);
    }

    public function postNew(PersonaCreateRequest $request)
    {

        $data = $request ->only('nombre', 'apellido', 'telefono1', 'telefono2', 'mail', 'funcion_id');
        $funcion_id     = Input::get('funcion_id');
        $this->personaRepo->create($data);

        //Agrego funcion a persona
        $persona = Persona::all();
        $persona->last()->Funcion()->sync(array($funcion_id));
        //$profiles= Profile::find(2);
        //$profiles->roles()->sync(array(3));
        return redirect()->back()->with('msg_ok', 'Persona creada correctamente.');


    }

    public function getEdit($id = null)
    {
        $data['funcion'] = Funcion::lists('funcion', 'id');
        $data['model'] = $this->personaRepo->getModel()->find($id);
        return view('personas.personas_form')->with($data);
    }

    public function postEdit($id = null ,PersonaCreateRequest $request)
    {
        $data = $request ->only('nombre', 'apellido', 'telefono1', 'telefono2', 'mail');
        $funcion_id     = Input::get('funcion_id');
        $model = $this->personaRepo->find($id);
        $model->Funcion()->sync(array($funcion_id));
        $this->personaRepo->edit($model,$data);
        return redirect()->back()->with('msg_ok', 'Persona editada correctamente.');

    }


    //delete
    public function getDelete($id  = null)
    {
        $model = $this->personaRepo->find($id);
        $model->Funcion()->detach();
        $this->personaRepo->Delete($id);
        return redirect()->back()->withErrors('Eliminado Correctamente');
    }

}