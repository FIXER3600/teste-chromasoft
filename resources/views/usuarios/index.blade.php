@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
        <h1>Lista de Usuários</h1>
        <a href="{{ route('usuarios.create') }}" class="btn btn-success mb-3">Novo Usuário</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <!-- Botão de Deletar que aciona o modal -->
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $usuario->id }}" data-nome="{{ $usuario->nome }}">Deletar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal de Deleção -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Deleção</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja deletar o usuário <strong id="userName"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para atualizar a URL do formulário de deleção e o nome do usuário no modal -->
    <script>
        const deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget
            const userId = button.getAttribute('data-id')
            const userName = button.getAttribute('data-nome')
            const formAction = `/usuarios/${userId}`

            const userNameElement = document.getElementById('userName')
            userNameElement.textContent = userName

            const deleteForm = document.getElementById('deleteForm')
            deleteForm.setAttribute('action', formAction)
        })
    </script>
@endsection
