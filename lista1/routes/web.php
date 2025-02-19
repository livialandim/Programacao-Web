<?php

/* Aqui é onde as rotas são declaradas */

use Illuminate\Auth\Events\Validated;
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

/* Criando uma rota para o exercício 1, que está na pasta lista */
Route::get('/exerc1', function() {
    return view('lista.exerc1');
});

/* Define a rota que recolhe os dados do formulário*/
Route::post('/listaexerc1', function(Request $request) {
    /* Acessando os campos do formulário */
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;

    return view('lista.exerc1', compact('media')); /* compact: transforma variáveis em array */
});

// EXERCÍCIO 2
Route::get('/exerc2', function() {
    return view('lista.exerc2');
});

Route::post('/listaexerc2', function(Request $request) {
    /* Acessando os campos do formulário */
    // $validator = Validator::make($request->all(), [
    //     'celsius' => 'required|numeric'
    // ]);
    $celsius = floatval($request->input('celsius'));

    $fahrenheit = ($celsius * 9/5) + 32;

    return view('lista.exerc2', compact('fahrenheit')); /* compact: transforma variáveis em array */
});

// EXERCÍCIO 3
Route::get('/exerc3', function() {
    return view('lista.exerc3');
});

Route::post('/listaexerc3', function(Request $request) {
    /* Acessando os campos do formulário */
    $fahrenheit = floatval($request->input('fahrenheit'));

    $celsius = ($fahrenheit - 32) * 5/9;

    return view('lista.exerc3', compact('celsius')); /* compact: transforma variáveis em array */
});

// EXERCÍCIO 4
Route::get('/exerc4', function() {
    return view('lista.exerc4');
});

Route::post('/listaexerc4', function(Request $request) {
    /* Acessando os campos do formulário */
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));

    $area = $largura * $altura;

    return view('lista.exerc4', compact('area')); /* compact: transforma variáveis em array */
});

// EXERCÍCIO 5
Route::get('/exerc5', function() {
    return view('lista.exerc5');
});

Route::post('/listaexerc5', function(Request $request) {
    /* Acessando os campos do formulário */
    $raio = floatval($request->input('raio'));

    $area = M_PI * $raio ** 2;

    return view('lista.exerc5', compact('area')); /* compact: transforma variáveis em array */
});