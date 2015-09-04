<?php

namespace App\Http\Requests;

class OperativoRequest extends Request
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
            'fecha_desde'    => 'required',
            'fecha_hasta'    => 'required',
            'horarios'    => 'required',
            'direccion'    => 'required',
            'posicion'    => 'required',
            'detalle'    => 'required',
        ];
    }

}
