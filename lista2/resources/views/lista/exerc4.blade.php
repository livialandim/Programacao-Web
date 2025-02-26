<!-- 
Faça um programa para ler um valor e calcular os números primos de 1 até
o valor informado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc4">

    @csrf

    <div class="mb-3">
        <label for="valor" class="form-label">Informe um valor </label>
        <input type="number" id="valor" name="valor" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)

    <p>Números primos encontrados: {{ $resultado }}</p>
    
@endisset

@endsection