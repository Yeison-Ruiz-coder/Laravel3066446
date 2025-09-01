<h1>Editar perfil</h1>
<form action="{{ route('profiles.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="bio">Bio:</label>
    <input type="text" name="bio" id="bio" value="{{ $profile->bio }}">
    <br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('profiles.index') }}">Volver a la lista</a>
