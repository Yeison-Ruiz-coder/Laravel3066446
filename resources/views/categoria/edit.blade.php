@extends('layouts.app')

@section('content')
    <h1>Lista de Categorías</h1>

    @if($categories->isEmpty())
        <p>No hay categorías registradas.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->name }}</td>
                        <td>
                            <a href="{{ route('categoria.show', $categoria->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('categoria.create') }}" class="btn btn-primary">Crear Nueva Categoría</a>
@endsection
