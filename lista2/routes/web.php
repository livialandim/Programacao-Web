<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;

Route::get('/exercicio/{id}', function ($id) {
    return view("lista.exerc$id");
})->name('exercicio');

/* EXERCÍCIO 1 */
Route::get('/exerc1', [ExercicioController::class, 'Exerc1']);

Route::post('/listaexerc1', [ExercicioController::class, 'ListaExerc1']);

/* EXERCÍCIO 2 */
Route::get('/exerc2', [ExercicioController::class, 'Exerc2']);

Route::post('/listaexerc2', [ExercicioController::class, 'ListaExerc2']);

/* EXERCÍCIO 3 */
Route::get('/exerc3', [ExercicioController::class, 'Exerc3']);

Route::post('/listaexerc3', [ExercicioController::class, 'ListaExerc3']);

/* EXERCÍCIO 4 */
Route::get('/exerc4', [ExercicioController::class, 'Exerc4']);

Route::post('/listaexerc4', [ExercicioController::class, 'ListaExerc4']);

/* EXERCÍCIO 5 */
Route::get('/exerc5', [ExercicioController::class, 'Exerc5']);

Route::post('/listaexerc5', [ExercicioController::class, 'ListaExerc5']);

/* EXERCÍCIO 6 */
Route::get('/exerc6', [ExercicioController::class, 'Exerc6']);

Route::post('/listaexerc6', [ExercicioController::class, 'ListaExerc6']);

/* EXERCÍCIO 7 */
Route::get('/exerc7', [ExercicioController::class, 'Exerc7']);

Route::post('/listaexerc7', [ExercicioController::class, 'ListaExerc7']);

/* EXERCÍCIO 8 */
Route::get('/exerc8', [ExercicioController::class, 'Exerc8']);

Route::post('/listaexerc8', [ExercicioController::class, 'ListaExerc8']);

/* EXERCÍCIO 9 */
Route::get('/exerc9', [ExercicioController::class, 'Exerc9']);

Route::post('/listaexerc9', [ExercicioController::class, 'ListaExerc9']);

/* EXERCÍCIO 10 */
Route::get('/exerc10', [ExercicioController::class, 'Exerc10']);

Route::post('/listaexerc10', [ExercicioController::class, 'ListaExerc10']);