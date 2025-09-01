<h1>Crear nuevo perfil</h1>
<form action="{{ route('profiles.store') }}" method="POST">
    @csrf
    <label for="bio">Bio:</label>
    <input type="text" name="bio" id="bio">
    <br>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('profiles.index') }}">Volver a la lista</a>
