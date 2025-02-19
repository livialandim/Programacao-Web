@extends('layout') <!-- Pega o conteúdo do layout -->

@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->

<form method="post" action="/listaexerc5">

    @csrf <!-- Obrigatório ter -->

    <div class="mb-3">
        <label for="raio" class="form-label">Informe o raio de um círculo</label>
        <input type="number" id="raio" name="raio" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)

    <p>A área do círculo é: {{ $area }}</p>

@endisset

@endsection <!-- Finaliza a seção conteúdo -->