<!--
Crie um formulário que permita ao usuário inserir uma temperatura em Fahrenheit. O script 
PHP deve converter essa temperatura para Celsius e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc3">

    @csrf

    <div class="mb-3">
        <label for="fahrenheit" class="form-label">Informe a temperatura em Fahrenheit</label>
        <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($celsius)

    <p>A temperatura, em Fahrenheit, é: {{ $celsius }}</p>

@endisset

@endsection