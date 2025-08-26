<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones Matemáticas</title>
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
        }

        @keyframes aparecer {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .boton-reintentar {
            margin-top: 15px;
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .boton-reintentar:hover {
            background-color: #f57c00;
        }
    </style>
</head>
<body>
    <h1>Operaciones Matematicas.</h1>

    <form action="{{ route('calcular') }}" method="POST">
        @csrf
        <input type="number" name="numero1" placeholder="Número 1" required value="{{ old('numero1') }}">
        <input type="number" name="numero2" placeholder="Número 2" required value="{{ old('numero2') }}">
        <select name="operacion">
            <option value="sumar" {{ old('operacion') == 'sumar' ? 'selected' : '' }}>Sumar</option>
            <option value="restar" {{ old('operacion') == 'restar' ? 'selected' : '' }}>Restar</option>
            <option value="multiplicar" {{ old('operacion') == 'multiplicar' ? 'selected' : '' }}>Multiplicar</option>
            <option value="dividir" {{ old('operacion') == 'dividir' ? 'selected' : '' }}>Dividir</option>
        </select>
        <button type="submit">Calcular</button>

        @if(session('resultado'))
            @php
                $resultado = session('resultado');
                $num1 = session('numero1');
                $num2 = session('numero2');
                $operacion = session('operacion');
                $simbolos = ['sumar' => '+', 'restar' => '-', 'multiplicar' => '×', 'dividir' => '÷'];
                $esNumero = is_numeric($resultado);
            @endphp

            <div class="resultado" style="
                background-color: {{ $esNumero ? '#d1f7c4' : '#f8d7da' }};
                color: {{ $esNumero ? '#2e7d32' : '#c62828' }};
                border: 2px solid {{ $esNumero ? '#81c784' : '#e57373' }};
            ">
                @if($esNumero)
                    ✅ {{ $num1 }} {{ $simbolos[$operacion] ?? '?' }} {{ $num2 }} = {{ number_format($resultado, 2) }}
                @else
                    ⚠️ {{ $resultado }}
                @endif
            </div>

            <form action="{{ route('operacionesmatematicas') }}" method="GET">
                <button type="submit" class="boton-reintentar">🔄 Nueva operación</button>
            </form>
        @endif
    </form>
</body>
</html>
