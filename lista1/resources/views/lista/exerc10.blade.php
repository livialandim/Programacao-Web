<!--
Crie um formulário que permita ao usuário inserir um valor em quilômetros. O script PHP deve 
converter esse valor para milhas (1 quilômetro = 0.621371 milhas) e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc10">

    @csrf

    <div class="mb-3">
        <label for="quilometros" class="form-label">Informe um valor em quilômetros</label>
        <input type="number" id="quilometros" name="quilometros" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($milhas)

    <p>O valor em milhas é: {{ $milhas }}</p>

@endisset

@endsection