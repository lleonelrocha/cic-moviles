<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 26/08/2015
 * Time: 12:17 PM
 */
namespace App\Http\Controllers;
use App\Entities\Funcion;
use App\Entities\Grupo;
use App\Entities\Persona;
use App\Http\Repositories\GrupoRepo;
use App\Http\Requests\GrupoRequest;
use App\Entities\GrupoPersona;
use Illuminate\Http\Request;
class GruposController extends Controller
{

    protected $grupoRepo;

    public function __construct(GrupoRepo $grupoRepo)
    {
        $this->grupoRepo = $grupoRepo;
    }

    public function getIndex()
    {
        $data['persona'] = Persona::lists('nombre', 'id');
        $data['funcion'] = Funcion::lists('funcion', 'id');
        $data['model'] = $this->grupoRepo->ListAndPaginate(2);
        return view('grupos.grupos_list')->with($data);
    }

    public function getNew(){

        $data['persona'] = Persona::lists('nombre', 'id');
        $data['funcion'] = Funcion::lists('funcion', 'id');
        return view('grupos.grupos_form')->with($data);
    }

    public function postNew(GrupoRequest $request)
    {
        $data = $request ->only('nombre');
        $this->grupoRepo->create($data);
        return redirect()->back()->with('msg_ok', 'Grupo creado correctamente.');
    }

    public function getEdit($id = null){

        $data['model'] = $this->grupoRepo->getModel()->find($id);
        return view('grupos.grupos_form')->with($data);
    }

    public function postEdit($id = null ,GrupoRequest $request)
    {
        $data = $request ->only('nombre');
        $model = $this->grupoRepo->find($id);
        $this->grupoRepo->edit($model,$data);
        return redirect()->back()->with('msg_ok', 'Grupo editado correctamente.');
    }

    //delete
    public function getDelete($id  = null)
    {
        $model = $this->grupoRepo->find($id);
        $this->grupoRepo->Delete($id);
        return redirect()->back()->withErrors('Eliminado Correctamente');
    }

    public function AddPerson(Request $request)
    {
        dd($request->all());
        return('Eliminado Correctamente');
    }


}