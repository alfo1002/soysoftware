<?php

namespace isoft\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RqEmpresaCrear extends FormRequest
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
            
            'nombre'=>'required|string|max:255',
            'propietario'=>'required|string|max:255',
            'ruc'=>'required|numeric|digits_between:10,25',
            'direccion'=>'required|max:255',
            'telefono'=>'required|max:25',
            'celular'=>'nullable|max:25',
            'foto'=>'nullable|mimes:jpeg,jpj,png',
            'email'=>'nullable|email|string|max:255',
            'descripcion'=>'nullable|string|max:255'
        ];
    }
}
