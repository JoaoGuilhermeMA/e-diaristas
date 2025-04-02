@extends('adminlte::page')

@section('title', 'Lista de serviços')

@section('content_header')
<h1>Lista de serviços</h1>
@stop

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($servicos as $servico)
            <tr>
                <td>{{$servico->id}}</td>
                <td>{{$servico->nome}}</td>
                <td><a href="{{ route('servicos.edit', $servico)}}" class="btn btn-primary">Atualizar</a></td>
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

<div class="d-flex justify-content-center">{{ $servicos->links() }}</div>

<div class="float-right">
    <a class="btn btn-success" href="{{ route('servicos.create') }}">Novo serviço</a>
</div>

@stop