<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVinoPost extends FormRequest
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
            

            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'precio' => 'max:255',
            'descripcion' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'color'=> 'required|string|max:255',
            'tipo'=> 'required|string|max:255',
            'meses_tiempo'=> 'required|integer|max:255',
            't_azucar'=> 'required|string|max:255'
        ];
    }
}
