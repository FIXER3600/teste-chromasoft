<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    // Exibir a lista de usuários
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
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
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6',
        ]);

        // Criar o novo usuário
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = Hash::make($request->senha);
        $usuario->save();

        return response()->json($usuario, 201);
    }

    // Atualizar um usuário
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        // Validar os dados da requisição
        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:usuarios,email,' . $usuario->id,
            'senha' => 'sometimes|required|string|min:6',
        ]);

        // Atualizar os dados do usuário
        if ($request->has('nome')) {
            $usuario->nome = $request->nome;
        }
        if ($request->has('email')) {
            $usuario->email = $request->email;
        }
        if ($request->has('senha')) {
            $usuario->senha = Hash::make($request->senha);
        }

        $usuario->save();  // Salva as alterações

        return response()->json($usuario);
    }

    // Deletar um usuário
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        $usuario->delete(); 

        return response()->json(['message' => 'Usuário deletado com sucesso']);
    }
}
