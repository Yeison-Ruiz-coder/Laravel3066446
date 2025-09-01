<h1>Lista de Perfiles</h1>
<a href="{{ route('profiles.create') }}">Crear nuevo perfil</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Bio</th>
        <th>Acciones</th>
    </tr>
    @foreach($profiles as $profile)
    <tr>
        <td>{{ $profile->id }}</td>
        <td>{{ $profile->bio }}</td>
        <td>
            <a href="{{ route('profiles.show', $profile->id) }}">Ver</a>
            <a href="{{ route('profiles.edit', $profile->id) }}">Editar</a>
            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
