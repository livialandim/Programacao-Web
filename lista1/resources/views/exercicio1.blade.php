@extends('layout') <!-- Pega o conteúdo do layout -->

@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->

<form method="post" action="/exercicio1resposta">

    @csrf <!-- Obrigatório ter -->
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o primeiro valor</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o segundo valor</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($soma)

    <p>O valor da soma é igual a: {{ $soma }}</p>

@endisset

@endsection <!-- Finaliza a seção conteúdo -->