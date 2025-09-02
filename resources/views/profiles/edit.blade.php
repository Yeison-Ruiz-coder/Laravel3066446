<h1>Editar perfil</h1>
<form action="{{ route('profiles.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" value="{{ $profile->title }}" required>
    <br>
    <label for="biography">Biografía:</label>
    <input type="text" name="biography" id="biography" value="{{ $profile->biography }}">
    <br>
    <label for="website">Sitio web:</label>
    <input type="text" name="website" id="website" value="{{ $profile->website }}">
    <br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('profiles.index') }}">Volver a la lista</a>
