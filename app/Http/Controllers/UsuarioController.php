<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Validation\ValidationException;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class UsuarioController extends Controller
{
    // Exibir a lista de usuários
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
{
    return view('usuarios.create');
}
public function edit($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.edit', compact('usuario'));
}


    // Exibir um único usuário
    public function show($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        return response()->json($usuario);
    }

    // Criar um novo usuário
    public function store(StoreUsuarioRequest $request)
    {
        try {
            $messages = [
                'nome.required' => 'Por favor, insira o nome do usuário.',
                'email.required' => 'O campo email é obrigatório.',
                'email.email' => 'Por favor, insira um endereço de email válido.',
                'email.unique' => 'Este email já está em uso.',
                'senha.min' => 'A senha deve ter no mínimo :min caracteres.',
            ];
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
        ], $messages);

        // Criar o novo usuário
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = Hash::make($request->senha);
        $usuario->save();
        return redirect()->route('usuarios.index');
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->errors())->withInput();
    }
    }

    // Atualizar um usuário

    public function update(UpdateUsuarioRequest $request, $id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        try {
            // Definindo mensagens de erro personalizadas
            $messages = [
                'nome.required' => 'Por favor, insira o nome do usuário.',
                'email.required' => 'O campo email é obrigatório.',
                'email.email' => 'Por favor, insira um endereço de email válido.',
                'email.unique' => 'Este email já está em uso.',
                'senha.min' => 'A senha deve ter no mínimo :min caracteres.',
            ];

            // Validar os dados da requisição
            $request->validate([
                'nome' => 'sometimes|required|string|max:255',
                'email' => 'sometimes|required|email|unique:usuarios,email,' . $usuario->id,
                'senha' => 'nullable|string|min:6',
            ], $messages);

            // Atualizar os dados do usuário
            if ($request->has('nome')) {
                $usuario->nome = $request->nome;
            }
            if ($request->has('email')) {
                $usuario->email = $request->email;
            }
            if ($request->filled('senha')) {
                $usuario->senha = Hash::make($request->senha);
            }
            $usuario->save();

            return redirect()->route('usuarios.index');

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }


    // Deletar um usuário
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
