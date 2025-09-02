<h1>Editar post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" value="{{ $post->name }}" required>
    <br>
    <label for="body">Contenido:</label>
    <textarea name="body" id="body" required>{{ $post->body }}</textarea>
    <br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('posts.index') }}">Volver a la lista</a>
