@extends('layout') <!-- Pega o conteúdo do layout -->

@section('conteudo') <!-- Tudo o que estiver dentro da seção será embutido na seção conteúdo-->

<form method="post" action="/listaexerc4">

    @csrf <!-- Obrigatório ter -->

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura do retângulo</label>
        <input type="number" id="altura" name="altura" class="form-control" required="" step="0.01">
    </div>

    <div class="mb-3">
        <label for="largura" class="form-label">Informe a largura do retângulo</label>
        <input type="number" id="largura" name="largura" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)

    <p>A área do retângulo é: {{ $area }}</p>

@endisset

@endsection <!-- Finaliza a seção conteúdo -->