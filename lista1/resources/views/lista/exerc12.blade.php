<!--
Crie um formulário que permita ao usuário inserir um preço e um percentual de desconto.O
script deve calcular o preço com desconto e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc12">

    @csrf

    <div class="mb-3">
        <label for="preco" class="form-label">Informe o preço do produto</label>
        <input type="number" id="preco" name="preco" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="percentual" class="form-label">Informe o percentual de desconto</label>
        <input type="number" id="percentual" name="percentual" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($precodesconto)

    <p>O preço com desconto é: {{ $precodesconto }}</p>

@endisset

@endsection