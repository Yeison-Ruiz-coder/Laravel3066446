<h1>Lista de Roles</h1>
<a href="{{ route('roles.create') }}">Crear nuevo rol</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($roles as $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a href="{{ route('roles.show', $role->id) }}">Ver</a>
            <a href="{{ route('roles.edit', $role->id) }}">Editar</a>
            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
