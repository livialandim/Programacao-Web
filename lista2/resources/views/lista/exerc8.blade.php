<!-- 
Crie um formulário para que o usuário informe um número. Use um loop
do-while para exibir uma contagem regressiva a partir do número
informado até 1.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc8">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($contagem)

    <p>A contagem é igual a: {{ $contagem }}</p>
    
@endisset

@endsection