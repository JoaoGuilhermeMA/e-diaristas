@extends('adminlte::page')

@section('title', 'Novo serviço')

@section('content_header')
<h1>Novo serviço</h1>
@stop

@section('content')
<form action="{{ route('servicos.store') }}" method="post">
    @include('servicos._form')
</form>
@stop