<!--
Crie um formulário que permita ao usuário inserir seu peso (em kg) e altura (em metros). O 
script PHP deve calcular o IMC (peso/altura^2) e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc11">

    @csrf

    <div class="mb-3">
        <label for="peso" class="form-label">Informe o peso em quilos</label>
        <input type="number" id="peso" name="peso" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura em metros</label>
        <input type="number" id="altura" name="altura" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($imc)

    <p>O IMC é: {{ $imc }}</p>

@endisset

@endsection