<!--
Crie um formulário que permita ao usuário inserir a largura e a altura de um retângulo. O script 
PHP deve calcular o perímetro do retângulo e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc6">

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

@isset($perimetro)

    <p>O perímetro do retângulo é: {{ $perimetro }}</p>

@endisset

@endsection