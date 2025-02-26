<!-- 
Escreva um programa para calcular a soma dos dois valores de entrada. Se
os dois valores forem iguais, retorne o triplo da soma. 
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc1">

    @csrf

    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o primeiro valor</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o segundo valor</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($soma)

    <p>A somados valores  é igual a: {{ $soma }}</p>

@endisset

@endsection