<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\AleatorioController;
use App\Http\Controllers\FactorialController;
use App\Http\Controllers\PromedioController;

//Ruta de inicio donde se encuentran todos los ejercicion en una lista.
Route::get('/', function () {
    return view('inicio');
});
//Rutas de controlador OperacionController
//---------------------------------------------------------------------------------------
//ruta para conectar views OperacionesMatematicas.blade.php
//Para usar la calculadora de operaciones matematicas usar /calcular en la pagina
Route::post('calcular', [OperacionesController::class, 'calcular'])->name('calcular');
Route::get('calcular', [OperacionesController::class, 'operacionesmatematicas'])->name('operacionesmatematicas');

//Primer ejemplo de como usar Laravel , conecta con views en frm_cuadratica.blade.php
//Usar /frmcuadratica en la pagina
Route::get('frmcuadratica', [OperacionesController::class, 'frmcuadratica'])->name('cuadratica.formulario');
Route::post('frmcuadratica', [OperacionesController::class, 'cuadratica'])->name('cuadratica.calcular');

//El diseño de los botones los saque de una biblioteca de diseños de Html.
//---------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------
//Ejerciocio 1 - Adivina un numero del 1 al 70 con pistas
//Creo las rutas que conectan views y controllers
Route::get('adivinar',[AleatorioController::class,'mostrarFormulario'])->name('adivinar.formulario');
Route::post('adivinar',[AleatorioController::class,'intentos'])->name('adivinar.intento');

//--------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------
//Ejercicio 2 - Ingresar un número del 1 al 10 y calcular su factorial
//Creo las rutas que conecten con views y controllers
Route::get('factorial',[FactorialController::class,'factorialFormulario'])->name('factorial.formulario');
Route::post('factorial',[FactorialController::class,'calcular'])->name('calcular.factorial');
//--------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------
//Ejercicio 3 - Pedir 5 notas y calcular el promedio.
//Creo las rutas que conecten con views y controllers
Route::get('promedio',[PromedioController::class,'promedioFormulario'])->name('promedio.formulario');
Route::post('promedio',[PromedioController::class,'calcular'])->name('calcular.promedio');
//--------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------
//Ejercicio 4 - Crear una tabla de multiplicar del 1 al 10 pidiendo un numero del 1 al 10.
//Creo las rutas que conectan views y controllers
Route::get('tablamult', [OperacionesController::class, 'tablamultFormulario'])->name('tabla.formulario');
Route::post('tablamult', [OperacionesController::class, 'calcularTabla'])->name('tabla.calcular');
//--------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------
//Bonus algoritmo que genere números entre [-225,450].
//Creo las rutas que conectan views y controllers
Route::get('analizar',[AleatorioController::class,'analizarNumeros'])->name('analizar.formulario');
Route::post('analizar',[AleatorioController::class,'analizarnum'])->name('analizar.calcular');

//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------

Route::get('categoria', [OperacionesController::class, 'index'])->name('categoria.index');
Route::get('categoria/create', [OperacionesController::class, 'create'])->name('categoria.create');
Route::post('categoria', [OperacionesController::class, 'store'])->name('categoria.store');
Route::get('categoria/{id}', [OperacionesController::class, 'show'])->name('categoria.show');
Route::get('categoria/{id}/edit', [OperacionesController::class, 'edit'])->name('categoria.edit');
Route::put('categoria/{id}', [OperacionesController::class, 'update'])->name('categoria.update');
Route::delete('categoria/{id}', [OperacionesController::class, 'destroy'])->name('categoria.destroy');
//---------------------------------------------------------------------------------------
