<!-- 
Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem
crescente em relação aos seus valores. Caso os valores sejam iguais,
informar o usuário e imprimir o valor em tela apenas uma vez.
Exemplo, para A=5, B=4 você deve imprimir na tela: "4 5".
para A=5, B=5 você deve imprimir na tela: “Números iguais: 5”.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc2">

    @csrf

    <div class="mb-3">
        <label for="valorA" class="form-label">Informe um valor A</label>
        <input type="number" id="valorA" name="valorA" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="valorB" class="form-label">Informe um valor B</label>
        <input type="number" id="valorB" name="valorB" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)

    <p>A somados valores  é igual a: {{ $resultado }}</p>

@endisset

@endsection