<!-- 
Crie um formulário para que o usuário informe um número. Use um loop
for para imprimir a tabuada desse número de 1 a 10.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc10">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($tabuada)

    <p>A tabuada é igual a: {{ $tabuada }}</p>
    
@endisset

@endsection