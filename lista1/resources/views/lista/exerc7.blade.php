<!--
Crie um formulário que permita ao usuário inserir o raio de um círculo. O script PHP deve 
calcular o perímetro do círculo (2πr) e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc7">

    @csrf

    <div class="mb-3">
        <label for="raio" class="form-label">Informe o raio de um círculo</label>
        <input type="number" id="raio" name="raio" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($perimetro)

    <p>A área do círculo é: {{ $perimetro }}</p>

@endisset

@endsection