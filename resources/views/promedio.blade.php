<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio de Notas</title>
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
            margin-bottom: 30px;
            color: #2c3e50;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            display: grid;
            gap: 15px;
            width: 320px;
        }

        input[type="number"], button {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            border-radius: 10px;
            background-color: #ffffffcc;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Calcular de Promedio</h1>

    <form method="POST" action="{{ route('calcular.promedio') }}">
        @csrf
        <input type="number" name="nota1" min="0" max="5" step="0.1" required placeholder="Nota 1">
        <input type="number" name="nota2" min="0" max="5" step="0.1" required placeholder="Nota 2">
        <input type="number" name="nota3" min="0" max="5" step="0.1" required placeholder="Nota 3">
        <input type="number" name="nota4" min="0" max="5" step="0.1" required placeholder="Nota 4">
        <input type="number" name="nota5" min="0" max="5" step="0.1" required placeholder="Nota 5">
        <button type="submit">Calcular Promedio</button>
    </form>

    @if(session('mensaje'))
        <div class="resultado">{{ session('mensaje') }}</div>
    @endif
</body>
</html>
