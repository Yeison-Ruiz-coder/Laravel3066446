@extends('layouts.app')

@section('content')
    <h1>Detalle de la Categoría</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $category->id }}</h5>
            <p class="card-text"><strong>Nombre:</strong> {{ $category->name }}</p>
        </div>
    </div>

    <a href="{{ route('categoria.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
@endsection
