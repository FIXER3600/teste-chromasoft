@extends('layouts.app')

@section('title', 'Editar usuário')

@section('content')
<div class="container mt-5">
    <h1>Editar Usuário</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome" value="{{ old('nome', $usuario->nome) }}" required>
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}" required>
        </div>
        <div>
            <label for="senha" class="form-label">Senha</label>
            <input class="form-control" type="password" id="senha" name="senha">
            <small>Deixe em branco se não quiser alterar</small>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
