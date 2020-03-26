<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if($this->method() == 'PUT') {
            return [
                'fullname'  => 'required|min:10',
                'email'     => 'required|email|unique:users,email,'.$this->id,
                'phone'     => 'required|numeric',
                'birthdate' => 'required|date',
                'gender'    => 'required',
                'address'   => 'required',
            ];
        } else {
             return [
            'fullname'  => 'required|min:10',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required|numeric',
            'birthdate' => 'required|date',
            'gender'    => 'required',
            'address'   => 'required',
            'photo'     => 'required|image|max:1000',
            'password'  => 'required|confirmed',
            ];
        }
    }
    public function messages() {
        return [
            'fullname.required'  => 'El campo Nombre Completo es obligatorio.',
            'fullname.min'       => 'El campo Nombre Completo debe contener al menos :min caracteres',
            'email.required'     => 'El campo Correo Electrónico es obligatorio.',
            'email.email'        => 'El campo Correo Electrónico debe ser una dirección de correo válida.',
            'email.unique'       => 'El campo Correo Electrónico ya está en uso.',
            'phone.required'     => 'El campo Número Telefónico es obligatorio.',
            'phone.numeric'      => 'El campo Número Telefónico debe ser un número.',
            'birthdate.required' => 'El campo Fecha de Nacimiento es obligatorio.',
            'birthdate.date'     => 'El campo Fecha de Nacimiento debe ser una fecha.',
            'gender.required'    => 'El campo Genero es obligatorio.',
            'address.required'   => 'El campo Dirección es obligatorio.',
            'photo.required'     => 'El campo Foto es obligatorio.',
            'photo.max'          => 'El campo Foto no debe pesar más de :max KB.',
            'password.required'  => 'El campo Contraseña es obligatorio.',
            'password.confirmed' => 'El campo Confirmación de Contraseña no coincide.'
        ];
    }

}
