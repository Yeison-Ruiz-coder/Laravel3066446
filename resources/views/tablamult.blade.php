<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
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
            color: #333;
        }
        form {
            margin-bottom: 30px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 80px;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 20px;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form action="{{ route('tabla.calcular') }}" method="POST">
        @csrf
        <label for="numero">Número (1-10):</label>
        <input type="number" name="numero" id="numero" min="1" max="10" required>
        <button type="submit">Calcular</button>
    </form>

    @isset($tabla)
        <h2>Tabla del {{ $numero }}</h2>
        <table>
            @foreach($tabla as $fila)
                <tr><td>{{ $fila }}</td></tr>
            @endforeach
        </table>
    @endisset
</body>
</html>
