<h1>Crear nuevo perfil</h1>
<form action="{{ route('profiles.store') }}" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="biography">Biografía:</label>
    <input type="text" name="biography" id="biography">
    <br>
    <label for="website">Sitio web:</label>
    <input type="text" name="website" id="website">
    <br>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('profiles.index') }}">Volver a la lista</a>
