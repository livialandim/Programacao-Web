<!--
Crie um formulário que permita ao usuário inserir uma base e um expoente. O script PHP deve 
calcular a base elevada ao expoente e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc8">

    @csrf

    <div class="mb-3">
        <label for="base" class="form-label">Informe a base de uma potência</label>
        <input type="number" id="base" name="base" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="expoente" class="form-label">Informe o expoente de uma potência</label>
        <input type="number" id="expoente" name="expoente" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($potencia)

    <p>A base elevada ao expoente é igual a: {{ $potencia }}</p>

@endisset

@endsection