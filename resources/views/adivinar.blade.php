<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Adivinanza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 text-center w-100" style="max-width: 500px;">
            <h2 class="mb-4">Adivina el número entre <strong>1 y 70</strong></h2>

            <form method="POST" action="{{ route('adivinar.intento') }}">

                @csrf
                <input type="number" name="numero" min="1" max="70" required class="form-control mb-3" placeholder="Tu número">
                <button type="submit" class="btn btn-custom w-100">Intentar</button>
            </form>

            @isset($mensaje)
                <div class="alert alert-info mt-4">{{ $mensaje }}</div>
                <a href="{{ route('adivinar.formulario') }}" class="btn btn-outline-success mt-2">🔄 Reiniciar juego</a>
            @endisset
        </div>
    </div>

    <!-- Bootstrap JS (opcional para interactividad) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
