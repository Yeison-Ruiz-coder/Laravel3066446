<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Cuadrática</title>
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

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-calculate {
            background-color: #007bff;
            color: white;
        }

        .btn-reset {
            background-color: #f44336;
            color: white;
        }

        .result, .error {
            margin-top: 20px;
            padding: 15px;
            border-radius: 6px;
            font-weight: bold;
        }

        .result {
            background-color: #e0f7fa;
            color: #00796b;
        }

        .error {
            background-color: #ffebee;
            color: #c62828;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora Cuadrática</h1>

        <form action="{{ route('cuadratica.calcular') }}" method="POST">
            @csrf

            <label for="a">Valor de a:</label>
            <input type="text" name="a" id="a" required>

            <label for="b">Valor de b:</label>
            <input type="text" name="b" id="b" required>

            <label for="c">Valor de c:</label>
            <input type="text" name="c" id="c" required>

            <div class="btn-group">
                <button type="submit" class="btn-calculate">Calcular</button>
                <button type="reset" class="btn-reset">Limpiar</button>
            </div>
        </form>

        @if(session('x1') && session('x2'))
            <div class="result">
                <p>Para la ecuación: {{ session('a') }}x² + {{ session('b') }}x + {{ session('c') }} = 0</p>
                <p>x₁ = {{ session('x1') }}</p>
                <p>x₂ = {{ session('x2') }}</p>
            </div>
        @elseif(session('error'))
            <div class="error">
                 {{ session('error') }}
            </div>
        @endif
    </div>
</body>
</html>
