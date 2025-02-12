<?php

/* Aqui é onde as rotas são declaradas */

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;

/* Utilizar a classe Route para definir as aplicações, utilizando os métodos disponíveis */

/* get é um método estático da classe Route. Para declarar um método estático é preciso colocar :: */
Route::get('/', function () { 
    return view('welcome'); /* view é uma função global que mostra um arquivo de view (página html, formulário...) */
});

/* Criando uma rota para exibir uma mensagem de boas vindas*/
Route::get('/bem-vindo', function () {
    return "Seja bem-vindo!";
});


/* Criando uma rota para o exercício 1 */
Route::get('/exercicio1', function() {
    return view('exercicio1');
});

/* Define a rota que recolhe os dados do formulário*/
Route::post('/exercicio1resposta', function(Request $request) {
    /* Acessando os campos do formulário */
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;

    return view('exercicio1', compact('soma')); /* compact: transforma variáveis em array */
});

