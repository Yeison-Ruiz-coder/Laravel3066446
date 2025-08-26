<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AleatorioController extends Controller
{
    public function mostrarFormulario()
    //Creo un metodo para generar un numero aleatorio
    {
        if (!session()->has('numero')) {
            session(['numero' => rand(1, 70)]);
        }

        return view('adivinar');
    }
    //Creo un metodo para dar pistas al usuario si se acerca al numero que se genero anteriormente.
    public function intentos(Request $request)
    {
        $numeroUsuario = $request->input('numero');
        $numeroCorrecto = session('numero');
        $mensaje = '';

        if ($numeroUsuario < $numeroCorrecto) {
            $mensaje = 'El número es mayor.';
        } elseif ($numeroUsuario > $numeroCorrecto) {
            $mensaje = 'El número es menor.';
        } else {
            $mensaje = '¡Correcto! Has adivinado el número.';
            session()->forget('numero'); // Reinicia el juego
        }

        return view('adivinar', compact('mensaje'));

    }

    //Creo el metodo para conectar con la pagina de html
    public function analizarNumeros(){
        return view('analizarnum');
    }


    //Creo la funcion para analizar los números aleatorios que se generan desde -225 hsta 450
    public function analizarnum(Request $request)
{
    $cantidad = $request->input('cantidad');

    if (!is_numeric($cantidad) || $cantidad < 1) {
        return back()->with('error', 'Ingresa una cantidad válida mayor a 0.');
    }

    $mayores = 0;
    $menores = 0;
    $iguales = 0;
    $numeros = [];

    for ($i = 0; $i < $cantidad; $i++) {
        $numero = rand(-225, 450);
        $numeros[] = $numero;

        if ($numero > 0) {
            $mayores++;
        } elseif ($numero < 0) {
            $menores++;
        } else {
            $iguales ++;
        }
    }

    return view('analizarnum', compact('numeros', 'mayores', 'menores', 'iguales', 'cantidad'));

}

}
