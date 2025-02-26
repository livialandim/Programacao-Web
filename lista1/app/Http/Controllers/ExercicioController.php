<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function Exercicio1()
    {
        return view('lista.exerc1');
    }

    public function RespostaExercicio1()
    {
        $nota1 = floatval($request->input('nota1'));
        $nota2 = floatval($request->input('nota2'));
        $nota3 = floatval($request->input('nota3'));
        $media = ($nota1 + $nota2 + $nota3) / 3;

        return view('lista.exerc1', compact('media'));
    }
}
