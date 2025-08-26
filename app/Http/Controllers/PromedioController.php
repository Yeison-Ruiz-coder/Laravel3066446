<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromedioController extends Controller
{
    //Asignamos el metodo para que muestre la pagina con todos los botones y funciones.
    public function promedioFormulario()
    {
        return view('promedio');
    }

    //Creamos metodo o clase donde se hace la operacion de sacar el promedio de las 5 notas y contar los intentos.
    public function calcular(Request $request)
{
    $notas = $request->only(['nota1', 'nota2', 'nota3', 'nota4', 'nota5']);
    $intentos = session('intentos', 0) + 1;
    session(['intentos' => $intentos]);

    foreach ($notas as $nota) {
        if (!is_numeric($nota) || $nota < 0 || $nota > 5) {
            return back()->with('mensaje', '⚠️ Todas las notas deben estar entre 0 y 5.');
        }
    }

    $promedio = array_sum($notas) / count($notas);

    if ($promedio >= 3) {
        $mensaje = "¡Aprobaste! Promedio: {$promedio}. Intentos: {$intentos}";
        session()->forget('intentos');
    } else {
        $mensaje = "No aprobaste. Promedio: {$promedio}. Intentos: {$intentos}";
    }

    return back()->with('mensaje', $mensaje);
}

}
