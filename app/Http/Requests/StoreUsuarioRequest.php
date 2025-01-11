<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Por favor, insira o nome do usuário.',
            'nome.min' => 'Nome precisa ter ao menos 3 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Por favor, insira um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter no mínimo :min caracteres.',
        ];
    }
}
