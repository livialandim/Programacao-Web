<!-- 
Faça um programa em PHP onde o valor de um produto é informado. Se
esse valor for superior a R$100,00 deve ser aplicado um desconto de 15%
sobre ele e exibido o novo valor do produto.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc3">

    @csrf

    <div class="mb-3">
        <label for="valor" class="form-label">Informe o valor de um produto</label>
        <input type="number" id="valor" name="valor" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($novovalor)

    <p>O valor com desconto é: R$ {{ $novovalor }}</p>

@endisset

@endsection