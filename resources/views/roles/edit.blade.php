<h1>Editar rol</h1>
<form action="{{ route('roles.update', $role->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nombre del rol:</label>
    <input type="text" name="name" id="name" value="{{ $role->name }}" required>
    <br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('roles.index') }}">Volver a la lista</a>
