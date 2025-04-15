@extends('adminlte::page')

@section('title', 'Lista de usuarios')

@section('content_header')
<h1>Lista de usuarios</h1>
@stop

@section('content')
@include('_mensagens_sessao')

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $usuario)}}" class="btn btn-primary">Atualizar</a>
                    <form action="{{ route('usuarios.destroy', $usuario) }}" method="post" style="display: inline">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('tem certeza que deseja apagar?')">Deletar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <th></th>
                <th>Nenhum registro foi encontrado</th>
                <th></th>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">{{ $usuarios->links() }}</div>

<div class="float-right">
    <a class="btn btn-success" href="{{ route('usuarios.create') }}">Novo usuario</a>
</div>

@stop