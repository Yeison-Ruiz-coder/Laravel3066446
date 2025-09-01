<h1>Editar post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}" required>
    <br>
    <label for="content">Contenido:</label>
    <textarea name="content" id="content" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('posts.index') }}">Volver a la lista</a>
