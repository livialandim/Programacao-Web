<!--
Crie um formulário que permita ao usuário inserir a largura e a altura de um retângulo. O script 
PHP deve calcular a área do retângulo e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc4">

    @csrf

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

@endsection