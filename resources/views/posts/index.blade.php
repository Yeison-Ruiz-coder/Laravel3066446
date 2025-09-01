<h1>Lista de Posts</h1>
<a href="{{ route('posts.create') }}">Crear nuevo post</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Contenido</th>
        <th>Acciones</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>
            <a href="{{ route('posts.show', $post->id) }}">Ver</a>
            <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
