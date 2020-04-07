<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
                'name'        => 'required|min:2',
                'description' => 'required|min:2',
                'category'    => 'required'     
            ];
        } else {
             return [
            'name'          => 'required|min:2',
            'description'   => 'required|min:2',
            'category'      => 'required',
            'image'         => 'required|image|max:1000'
            ];
        }
    }

    public function messages() {
        return [
            'name.required'         => 'El campo Nombre es obligatorio.',
            'name.min'              => 'El campo Nombre debe contener al menos :min caracteres',
            'description.required'  => 'El campo Descripcion es obligatorio.',
            'description.min'       => 'El campo Descripcion debe contener al menos :min caracteres',            
            'image.required'        => 'El campo Imagen es obligatorio.',
            'image.max'             => 'El campo Imagen no debe pesar más de :max KB.',
            'category.required'     => 'El campo Categoria es obligatorio.'
        ];
    }

}