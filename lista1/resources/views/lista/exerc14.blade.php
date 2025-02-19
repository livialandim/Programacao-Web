<!--
Crie um formulário que permita ao usuário inserir um capital, uma taxa de juros e um período.
O script PHP deve calcular o montante com juros compostos (capital * (1 + taxa) ^ período) e
exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc14">

    @csrf

    <div class="mb-3">
        <label for="capital" class="form-label">Informe o capital:</label>
        <input type="number" id="capital" name="capital" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Informe a taxa:</label>
        <input type="number" id="taxa" name="taxa" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Informe o período em dias:</label>
        <input type="number" id="periodo" name="periodo" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($juros)

    <p>O juros composto é de: {{ $juros }}</p>

@endisset

@endsection