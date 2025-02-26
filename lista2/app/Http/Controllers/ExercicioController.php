<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    /* EXERCÍCIO 1 */
    public function Exerc1()
    {
        return view('lista.exerc1');
    }

    public function ListaExerc1(Request $request)
    {
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));

        $soma = $valor1 + $valor2;

        if ($valor1 == $valor2) {
            $soma = 3 * $soma;
            return view('lista.exerc1', compact('soma'));
        }
        return view('lista.exerc1', compact('soma'));
    }

    /* EXERCÍCIO 2 */
    public function Exerc2()
    {
        return view('lista.exerc2');
    }

    public function ListaExerc2(Request $request)
    {
        $valorA = floatval($request->input('valorA'));
        $valorB = floatval($request->input('valorB'));

        if ($valorA == $valorB) {
            $resultado = "Os números são iguais: $valorA";
        } else {
            $valores = [$valorA, $valorB];
            sort($valores);
            $resultado = implode("", $valores);
        }


        return view('lista.exerc2', compact('resultado'));
    }

    /* EXERCÍCIO 3 */
    public function Exerc3()
    {
        return view('lista.exerc3');
    }

    public function ListaExerc3(Request $request)
    {
        $valor = floatval($request->input('valor'));

        if ($valor >= 100) {
            $desconto = $valor * 0.15;
            $novovalor = $valor - $desconto;
        } else {
            $novovalor = $valor;
        }

        return view('lista.exerc3', compact('novovalor'));
    }

    /* EXERCÍCIO 4 */
    public function Exerc4()
    {
        return view('lista.exerc4');
    }

    public function ListaExerc4(Request $request)
    {
        $valor = floatval($request->input('valor'));
        $primos = [];

        function Primo($valor)
        {
            if ($valor < 2) return false;
            for ($i = 2; $i <= sqrt($valor); $i++) {
                if ($valor % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        for ($i = 2; $i <= $valor; $i++) {
            if (Primo($i)) {
                $primos[] = $i;
            }
        }
        return view('lista.exerc4', ['resultado' => implode(", ", $primos)]);
    }

    /* EXERCÍCIO 5 */
    public function Exerc5()
    {
        return view('lista.exerc5');
    }

    public function ListaExerc5(Request $request)
    {
        $numero = floatval($request->input('numero'));

        switch ($numero) {
            case 1:
                $mes = 'Janeiro';
                break;
            case 2:
                $mes = 'Fevereiro';
                break;
            case 3:
                $mes = 'Março';
                break;
            case 4:
                $mes = 'Abril';
                break;
            case 5:
                $mes = 'Maio';
                break;
            case 6:
                $mes = 'Junho';
                break;
            case 7:
                $mes = 'Julho';
                break;
            case 8:
                $mes = 'Agosto';
                break;
            case 9:
                $mes = 'Setembro';
                break;
            case 10:
                $mes = 'Outubro';
                break;
            case 11:
                $mes = 'Novembro';
                break;
            case 12:
                $mes = 'Dezembro';
                break;
            default:
                $mes = 'Informe um mês válido';
        }

        return view('lista.exerc5', compact('mes'));
    }

    /* EXERCÍCIO 6 */
    public function Exerc6()
    {
        return view('lista.exerc6');
    }

    public function ListaExerc6(Request $request)
    {
        $numero = floatval($request->input('numero'));

        $numeros = [];
        for ($i = 0; $i <= $numero; $i++) {
            $numeros[] = $i;
        }

        return view('lista.exerc6', ['numeros' => implode(", ", $numeros)]);
    }

    /* EXERCÍCIO 7 */
    public function Exerc7()
    {
        return view('lista.exerc7');
    }

    public function ListaExerc7(Request $request)
    {
        $numero = floatval($request->input('numero'));

        $soma = 0;
        for ($i = 0; $i <= $numero; $i++) {
            $soma += $i;
        }

        return view('lista.exerc7', compact('soma'));
    }

    /* EXERCÍCIO 8 */
    public function Exerc8()
    {
        return view('lista.exerc8');
    }

    public function ListaExerc8(Request $request)
    {
        $numero = intval($request->input('numero'));

        do {
            $contagem[] = $numero;
            $numero--;
        } while ($numero >= 1);

        return view('lista.exerc8', ['contagem' => implode(", ", $contagem)]);
    }

    /* EXERCÍCIO 9 */
    public function Exerc9()
    {
        return view('lista.exerc9');
    }

    public function ListaExerc9(Request $request)
    {
        $numero = intval($request->input('numero'));

        $fatorial = 1;

        for($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }

        return view('lista.exerc9', compact('fatorial'));
    }

    /* EXERCÍCIO 10 */
    public function Exerc10()
    {
        return view('lista.exerc10');
    }

    public function ListaExerc10(Request $request)
    {
        $numero = intval($request->input('numero'));

        $tabuada = [];

        for($i = 1; $i <= 10; $i++) {
            $tabuada[] = $i * $numero;
        }

        return view('lista.exerc10', ['tabuada' => implode(", ", $tabuada)]);
    }
}
