<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserPut extends FormRequest
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
                'name' => 'required|string|max:255',
                'apellido' => 'max:255',
                'rol' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.$this->route('user')->id,
                'pass1' => 'max:255|required_with:contra2|same:pass2',
                'pass2' => 'max:255'
        ];
    }
}
