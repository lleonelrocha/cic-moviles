<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class PersonaCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'    => 'required|max:255',
            'apellido'  => 'required|max:255',
            'telefono1' => 'required',
            'telefono2' => 'required',
            'mail'      => 'required|email'
        ];
    }

   /* public function messages()
    {
        return [
            'username.required' => 'bla'
        ];
    }
   */
}
