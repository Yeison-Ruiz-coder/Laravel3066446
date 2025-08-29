<form action="{{ route('categoria.store') }}" method="POST">
    @csrf
    <input type="text" name="name" required>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('categoria.index') }}">Volver a la lista de categorías</a>
