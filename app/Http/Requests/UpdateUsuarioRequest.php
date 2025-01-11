<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $usuarioId = $this->route('id'); // Obtém o ID do usuário na rota

        return [
            'nome' => 'sometimes|required|string|min:3|max:255',
            'email' => 'sometimes|required|email|unique:usuarios,email,' . $usuarioId,
            'senha' => 'nullable|string|min:6',
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
            'senha.min' => 'A senha deve ter no mínimo :min caracteres.',
        ];
    }
}
