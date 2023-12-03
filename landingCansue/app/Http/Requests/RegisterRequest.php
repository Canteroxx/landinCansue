<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * determina si el usuario esta autorizado para crear la request
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * obtiene las reglas de validacion para aplicar el request
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=> 'required|unique:users,email',
            'username'=> 'required|unique:users,username',
            'password'=> 'required|min:8',
            'password_confirmation'=> 'required|same:password',
        ];
    }
}
