<!--
Crie um formulário que permita ao usuário inserir um valor em dias. O script PHP deve
converte esse valor para horas, minutos e segundos e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc15">

    @csrf

    <div class="mb-3">
        <label for="dias" class="form-label">Informe a quantidade de dias:</label>
        <input type="number" id="dias" name="dias" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($horas)

    <p>O tempo é igual a: {{ $horas }}h, {{ $minutos }}min e {{ $segundos }}s</p>

@endisset

@endsection