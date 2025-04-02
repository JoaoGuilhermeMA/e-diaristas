@extends('adminlte::page')

@section('title', 'Novo serviço')

@section('content_header')
<h1>Novo serviço</h1>
@stop

@section('content')
<form action="{{ route('servicos.store') }}" method="post">
    @csrf

    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend>Identificação</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="input" required class="form-control" name="nome" id="nome"
                                placeholder="Nome do serviço">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="icone">Ícone</label>
                            <select name="icone" id="icone" class="form-control">
                                <option value="">Seleciona o ícone</option>
                                <option value="twf-cleaning-1">Ícone 1</option>
                                <option value="twf-cleaning-2">Ícone 2</option>
                                <option value="twf-cleaning-3">Ícone 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="posicao">Posição na plataforma</label>
                            <input type="input" required class="form-control" name="posicao" id="posicao" data-mask="00"
                                placeholder="Posição do serviço na plataforma">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Globais</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="valor_minimo">Valor Mínimo</label>
                            <input type="input" required class="form-control" name="valor_minimo" data-mask="#.##0,00"
                                data-mask-reverse="true" id="valor_minimo" placeholder="Valor mínimo do serviço">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantidade_horas">Quantidade Mínima de horas</label>
                            <input type="input" required class="form-control" name="quantidade_horas"
                                id="quantidade_horas" data-mask="0" placeholder="Quantidade mínima de horas">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="porcentagem">Porcentagem de Comissão</label>
                            <input type="input" required class="form-control" name="porcentagem" id="porcentagem"
                                data-mask="00" placeholder="Porcentagem de comissão no serviço">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Cômodos</legend>
                @php
                    $comodos = ['quarto', 'sala', 'banheiro', 'cozinha', 'quintal', 'outros'];
                @endphp
                @foreach ($comodos as $comodo)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor_{{ $comodo }}">Valor por {{ $comodo }}</label>
                                <input type="input" required class="form-control" name="valor_{{ $comodo }}"
                                    id="valor_{{ $comodo }}" data-mask="#.##0,00" data-mask-reverse="true"
                                    placeholder="Valor por {{ $comodo }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="horas_{{ $comodo }}">Quantidade de horas por {{ $comodo }}</label>
                                <input type="input" required class="form-control" name="horas_{{ $comodo }}"
                                    id="horas_{{ $comodo }}" data-mask="0" placeholder="Quantidade horas por {{ $comodo }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </fieldset>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop