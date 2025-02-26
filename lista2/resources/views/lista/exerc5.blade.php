<!-- 
Faça um programa que leia o valor associado a um mês. Exemplo: 1 –
Janeiro, 2 – Fevereiro... Exiba o nome do mês associado = USE SWITCH
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc5">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número do mês </label>
        <input type="number" id="numero" name="numero" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($mes)

    <p>O mês correspondente é: {{ $mes }}</p>
    
@endisset

@endsection