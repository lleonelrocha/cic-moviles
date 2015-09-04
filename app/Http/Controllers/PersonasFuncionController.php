<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 26/08/2015
 * Time: 12:17 PM
 */
namespace App\Http\Controllers;


use App\Http\Repositories\PersonaFuncionRepo;
use App\Http\Requests\FuncionPersonaRequest;

class PersonasFuncionController extends Controller
{

    protected $personaFuncionRepo;

    public function __construct(PersonaFuncionRepo $personaFuncionRepo)
    {
        $this->personaFuncionRepo = $personaFuncionRepo;
    }

    public function getIndex()
    {
        $data['model'] = $this->personaFuncionRepo->ListAndPaginate(2) ;
        return view('funciones.funciones_list')->with($data);
    }

    public function getNew()
    {
        return view('funciones.funciones_form');
    }

    public function postNew(FuncionPersonaRequest $request)
    {
        $data = $request->only('funcion');
        $this->personaFuncionRepo->create($data);
        return redirect()->back()->with('msg_ok', 'Funcion creada correctamente.');
    }

    public function getEdit($id = null){
        $data['model'] = $this->personaFuncionRepo->find($id);
        return view('funciones.funciones_form')->with($data);
    }

    public function postEdit($id = null, FuncionPersonaRequest $request)
    {
         $data = $request->only('funcion');
         $model = $this->personaFuncionRepo->find($id);
         $this->personaFuncionRepo->edit($model,$data);
         return redirect()->back()->with('msg_ok', 'Funcion editada correctamente.');
    }


    //delete
    public function getDelete($id  = null)
    {
         $this->personaFuncionRepo->Delete($id);
        return redirect()->back()->withErrors('Eliminado Correctamente');
    }

}