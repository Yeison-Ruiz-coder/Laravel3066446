<h1>Crear nuevo rol</h1>
<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <label for="name">Nombre del rol:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('roles.index') }}">Volver a la lista</a>
