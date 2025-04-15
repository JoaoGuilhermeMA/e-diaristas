@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
<h1>Editar usuario</h1>
@stop

@section('content')
@include('_mensagens')

<form action="{{ route('usuarios.update', $usuario) }}" method="post">
    @method('PUT')

    @include('usuarios._form')
</form>
@stop