<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteFormRequest extends FormRequest
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
        'nome'      => 'required|min:3|max:100',
        'datanasc'  => 'required|date',
        'municipio' => 'required|',
        ];
    }

    public function messages() 
    {
        return [
        'nome.required'      => 'O campo Nome é de preenchimento obrigatório!',
        'datanasc.required'  => 'O campo Data de Nascimento é de preenchimento obrigatório!',
        'municipio.required' => 'O campo Cidade é de preenchimento obrigatório!',            
        ];
    }
}
