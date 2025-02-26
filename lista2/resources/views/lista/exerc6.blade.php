<!-- 
Crie um formulário para que o usuário informe um número. Use um loop
for para imprimir todos os números de 1 até o número informado.
-->

@extends('layout')

@section('conteudo')

<form method="post" action="/listaexerc6">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número</label>
        <input type="number" id="numero" name="numero" class="form-control" required="" step="0.01">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($numeros)

    <p>Os números anteriores a esse são: {{ $numeros }}</p>
    
@endisset

@endsection