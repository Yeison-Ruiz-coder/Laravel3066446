<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Factorial</title>
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
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 320px;
        }

        input, select, button {
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
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
            border-radius: 10px;
            animation: aparecer 0.6s ease-in-out;
            text-align: center;
            background-color: #ffffffcc;
        }

        @keyframes aparecer {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <h1>Factorial del 1 al 10</h1>

    <form method="POST" action="{{ route('calcular.factorial') }}">
        @csrf
        <input type="number" name="numero" min="1" max="10" required placeholder="Número entre 1 y 10">
        <button type="submit">Calcular</button>
    </form>

    @isset($mensaje)
        <div class="resultado">{{ $mensaje }}</div>
    @endisset
</body>
</html>
