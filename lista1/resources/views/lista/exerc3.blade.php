@extends('layout') <!-- Pega o conteúdo do layout -->

@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->

<form method="post" action="/listaexerc3">

    @csrf <!-- Obrigatório ter -->

    <div class="mb-3">
        <label for="fahrenheit" class="form-label">Informe a temperatura em Fahrenheit</label>
        <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($celsius)

    <p>A temperatura, em Fahrenheit, é: {{ $celsius }}</p>

@endisset

@endsection <!-- Finaliza a seção conteúdo -->