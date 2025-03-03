<!-- 
Crie um formulário que permita ao usuário inserir uma temperatura em Celsius. O script PHP 
deve converter essa temperatura para Fahrenheit e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc2">

    @csrf

    <div class="mb-3">
        <label for="celsius" class="form-label">Informe a temperatura em Celsius</label>
        <input type="number" id="celsius" name="celsius" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($fahrenheit)

    <p>A temperatura, em Fahrenheit, é: {{ $fahrenheit }}</p>

@endisset

@endsection