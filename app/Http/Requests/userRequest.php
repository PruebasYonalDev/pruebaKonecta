<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            //Campos requeridos para la creacion de usuarios

            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'rol' => 'requires',
            'password' => 'required'

        ];
    }
}
