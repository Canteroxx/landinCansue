<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required'
        ];
    }
        /**
     * obtiene las credenciales para el login
     *
     */

    public function getCredentials(){
        $username = $this->get('username');

        if($this->isEmail($username)){
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }
        return $this->only('username', 'password');
    }
        /**
     * es para iniciar sesion con el correo, para eso usamos un sistema de validacion de laravel
     *
     */
    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(['username' => $value], ['username' => 'email'])->fails();
    }
}
