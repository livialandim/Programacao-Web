<!--
Crie um formulário que permita ao usuário inserir um valor em metros. O script PHP deve 
converter esse valor para centímetros e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc9">

    @csrf

    <div class="mb-3">
        <label for="metros" class="form-label">Informe um valor em metros</label>
        <input type="number" id="metros" name="metros" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($centimetros)

    <p>O valor em centrímetro é: {{ $centimetros }}</p>

@endisset

@endsection