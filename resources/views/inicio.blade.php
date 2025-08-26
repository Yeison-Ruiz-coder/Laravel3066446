<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios del Taller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
            color: #333;
        }
        .card {
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Ejercicios del Taller 1 Laravel</h1>
        <div class="row justify-content-center">

            <!-- Operaciones Matemáticas -->
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <h5>Operaciones Matemáticas</h5>
                    <p>Operaciones matematicas (suma, resta, multiplicación, división)</p>
                    <a href="{{ route('operacionesmatematicas') }}" class="btn btn-primary">Ir al ejercicio</a>
                </div>
            </div>

            <!-- Fórmula Cuadrática -->
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <h5>Fórmula Cuadrática</h5>
                    <p>Hallar el resultado de una formula cuadratica con 3 variables(a,b,c)</p>
                    <a href="{{ route('cuadratica.formulario') }}" class="btn btn-primary">Ir al ejercicio</a>
                </div>
            </div>

            <!-- Adivina el número ejercicio 1-->
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <h5>Adivina un número de 1 a 70</h5>
                    <p>Adivina un número generado aleatoriamente entre 1 y 70 con pistas.</p>
                    <a href="{{ route('adivinar.formulario') }}" class="btn btn-primary">Ir al ejercicio</a>
                </div>
            </div>

            <!-- Factorial ejercicio numero 2-->
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <h5>Factorial del numero 1 al 10</h5>
                    <p>Escribe un numero del 1 al 10 para hallar su factorial.</p>
                    <a href="{{ route('factorial.formulario') }}" class="btn btn-primary">Ir al ejercicio</a>
                </div>
            </div>


            <!-- Factorial ejercicio numero 3-->
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <h5>Promedio 5 notas</h5>
                    <p>Escribe 5 notas de 1 a 5 para ver si aprobo o no.</p>
                    <a href="{{ route('promedio.formulario') }}" class="btn btn-primary">Ir al ejercicio</a>
                </div>
            </div>

            <!-- Factorial ejercicio numero 4-->
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <h5>Tabla de multiplicar</h5>
                    <p>Escribe un número del 1 al 10 para ver la tabla de multiplicar.</p>
                    <a href="{{ route('tabla.formulario') }}" class="btn btn-primary">Ir al ejercicio</a>
                </div>
            </div>


             <!-- Bonus 20 numeros aleatorios-->
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center">
                    <h5>Numeros aleatorios</h5>
                    <p>Se generan unos numeros aleatorios en un rango determinado (-225,450)con 3 condiciones.</p>
                    <a href="{{ route('analizar.formulario') }}" class="btn btn-primary">Ir al ejercicio</a>
                </div>
            </div>


        </div>
    </div>
</body>
</html>
