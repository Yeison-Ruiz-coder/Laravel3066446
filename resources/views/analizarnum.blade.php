<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Analizar Números Aleatorios</title>
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

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 300px;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .error {
            color: red;
            margin-top: 15px;
            font-weight: bold;
        }

        .resultado {
            margin-top: 30px;
            background-color: #ffffffcc;
            padding: 20px;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        ul {
            list-style: none;
            padding: 0;
            max-height: 200px;
            overflow-y: auto;
            margin-top: 10px;
        }

        li {
            padding: 4px 0;
            border-bottom: 1px solid #eee;
        }
    </style>
</head>
<body>
    <h1>Analizar Números Aleatorios</h1>

    <form method="POST" action="{{ route('analizar.calcular') }}">
        @csrf
        <label for="cantidad">Cantidad de números a generar:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required placeholder="Ej. 50">
        <button type="submit">Analizar</button>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif
    </form>

    @isset($numeros)
        <div class="resultado">
            <p>Se generaron <strong>{{ $cantidad }}</strong> números entre -225 y 450:</p>
            <p>Mayores que 0: <strong>{{ $mayores }}</strong></p>
            <p>Menores que 0: <strong>{{ $menores }}</strong></p>
            <p>Iguales a 0: <strong>{{ $iguales }}</strong></p>

            <h4>Lista de números:</h4>
            <ul>
                @foreach($numeros as $n)
                    <li>{{ $n }}</li>
                @endforeach
            </ul>
        </div>
    @endisset
</body>
</html>
