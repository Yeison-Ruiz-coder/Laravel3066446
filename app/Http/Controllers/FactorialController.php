<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    //Metodo para mostrar factorial en la pagina de html
    public function factorialFormulario()
    {
        return view('factorial');
    }

    //Metodo para calcular el factorial de un numero entre 1 y 10
    public function calcular(Request $request)
    {
        $numero = $request->input('numero');
        $resultado = 1;
        $pasos = [];

        if ($numero >= 1 && $numero <= 10) {
            for ($i = 1; $i <= $numero; $i++) {
                $resultado *= $i;
                $pasos[] = $i;
            }

            $mensaje = "El factorial de {$numero} es: " . implode(' × ', $pasos) . " = {$resultado}";
        } else {
            $mensaje = "Por favor ingresa un número entre 1 y 10.";
        }

        return view('factorial', compact('mensaje'));
    }
}
