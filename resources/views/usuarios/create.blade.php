@extends('adminlte::page')

@section('title', 'Novo usuario')

@section('content_header')
<h1>Novo serviço</h1>
@stop

@section('content')
@include('_mensagens')
<form action="{{ route('usuarios.store') }}" method="post">
    @include('usuarios._form')
</form>
@stop