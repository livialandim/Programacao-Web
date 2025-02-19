@extends('layout') <!-- Pega o conteúdo do layout -->

@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->

<form method="post" action="/listaexerc2">

    @csrf <!-- Obrigatório ter -->

    <div class="mb-3">
        <label for="celsius" class="form-label">Informe a temperatura em Celsius</label>
        <input type="number" id="celsius" name="celsius" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($fahrenheit)

    <p>A temperatura, em Fahrenheit, é: {{ $fahrenheit }}</p>

@endisset

@endsection <!-- Finaliza a seção conteúdo -->