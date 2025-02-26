<!-- 
Crie um formulário para que o usuário informe um número. Use um loop
while para somar todos os números de 1 até o número informado e exibir o
resultado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc7">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número</label>
        <input type="number" id="numero" name="numero" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($soma)

    <p>A soma de todos os números é igual a: {{ $soma }}</p>
    
@endisset

@endsection