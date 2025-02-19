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

Route::get('/exercicio/{id}', function ($id) {
    return view("lista.exerc$id");
})->name('exercicio');

/* Criando uma rota para o exercício 1, que está na pasta lista */
Route::get('/exerc1', function () {
    return view('lista.exerc1');
});

/* Define a rota que recolhe os dados do formulário*/
Route::post('/listaexerc1', function (Request $request) {
    /* Acessando os campos do formulário */
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;

    return view('lista.exerc1', compact('media')); /* compact: transforma variáveis em array */
});

// EXERCÍCIO 2
Route::get('/exerc2', function () {
    return view('lista.exerc2');
});

Route::post('/listaexerc2', function (Request $request) {
    // $validator = Validator::make($request->all(), [
    //     'celsius' => 'required|numeric'
    // ]);
    $celsius = floatval($request->input('celsius'));

    $fahrenheit = ($celsius * 9 / 5) + 32;

    return view('lista.exerc2', compact('fahrenheit'));
});

// EXERCÍCIO 3
Route::get('/exerc3', function () {
    return view('lista.exerc3');
});

Route::post('/listaexerc3', function (Request $request) {
    $fahrenheit = floatval($request->input('fahrenheit'));

    $celsius = ($fahrenheit - 32) * 5 / 9;

    return view('lista.exerc3', compact('celsius'));
});

// EXERCÍCIO 4
Route::get('/exerc4', function () {
    return view('lista.exerc4');
});

Route::post('/listaexerc4', function (Request $request) {
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));

    $area = $largura * $altura;

    return view('lista.exerc4', compact('area'));
});

// EXERCÍCIO 5
Route::get('/exerc5', function () {
    return view('lista.exerc5');
});

Route::post('/listaexerc5', function (Request $request) {
    $raio = floatval($request->input('raio'));

    $area = M_PI * $raio ** 2;

    return view('lista.exerc5', compact('area'));
});

// EXERCÍCIO 6
Route::get('/exerc6', function () {
    return view('lista.exerc6');
});

Route::post('/listaexerc6', function (Request $request) {
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));

    $perimetro = 2 * $largura +  2 * $altura;

    return view('lista.exerc6', compact('perimetro'));
});

// EXERCÍCIO 7
Route::get('/exerc7', function () {
    return view('lista.exerc7');
});

Route::post('/listaexerc7', function (Request $request) {
    $raio = floatval($request->input('raio'));

    $perimetro = M_PI * $raio * 2;

    return view('lista.exerc7', compact('perimetro'));
});

// EXERCÍCIO 8
Route::get('/exerc8', function () {
    return view('lista.exerc8');
});

Route::post('/listaexerc8', function (Request $request) {
    $base = floatval($request->input('base'));
    $expoente = floatval($request->input('expoente'));

    $potencia = $base ** $expoente;

    return view('lista.exerc8', compact('potencia'));
});

// EXERCÍCIO 9
Route::get('/exerc9', function () {
    return view('lista.exerc9');
});

Route::post('/listaexerc9', function (Request $request) {
    $metros = floatval($request->input('metros'));

    $centimetros = $metros / 100;

    return view('lista.exerc9', compact('centimetros'));
});

// EXERCÍCIO 10
Route::get('/exerc10', function () {
    return view('lista.exerc10');
});

Route::post('/listaexerc10', function (Request $request) {
    $quilometros = floatval($request->input('quilometros'));

    $milhas = $quilometros * 0.621371;

    return view('lista.exerc10', compact('milhas'));
});

// EXERCÍCIO 11
Route::get('/exerc11', function () {
    return view('lista.exerc11');
});

Route::post('/listaexerc11', function (Request $request) {
    $peso = floatval($request->input('peso'));
    $altura = floatval($request->input('altura'));

    $imc = $peso / $altura ** 2;

    return view('lista.exerc11', compact('imc'));
});

// EXERCÍCIO 12
Route::get('/exerc12', function () {
    return view('lista.exerc12');
});

Route::post('/listaexerc12', function (Request $request) {
    $preco = floatval($request->input('preco'));
    $percentual = floatval($request->input('percentual'));

    $desconto = $preco * $percentual / 100;

    $precodesconto = $preco - $desconto;

    return view('lista.exerc12', compact('precodesconto'));
});

// EXERCÍCIO 13
Route::get('/exerc13', function () {
    return view('lista.exerc13');
});

Route::post('/listaexerc13', function (Request $request) {
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = floatval($request->input('periodo'));

    $juros = $capital * $taxa * $periodo;

    return view('lista.exerc13', compact('juros'));
});

// EXERCÍCIO 14
Route::get('/exerc14', function () {
    return view('lista.exerc14');
});

Route::post('/listaexerc14', function (Request $request) {
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = floatval($request->input('periodo'));

    $juros = $capital * (1 + $taxa) ** $periodo;

    return view('lista.exerc14', compact('juros'));
});

// EXERCÍCIO 15
Route::get('/exerc15', function () {
    return view('lista.exerc15');
});

Route::post('/listaexerc15', function (Request $request) {
    $dias = floatval($request->input('dias'));

    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

    return view('lista.exerc15', compact('horas', 'minutos', 'segundos'));
});
