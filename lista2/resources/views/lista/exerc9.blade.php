<!-- 
Crie um formulário para que o usuário informe um número. Use um loop
for para calcular o fatorial desse número e exibir o resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc9">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($fatorial)

    <p>O fatorial é igual a: {{ $fatorial }}</p>
    
@endisset

@endsection