<h1>Crear nuevo post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="content">Contenido:</label>
    <textarea name="content" id="content" required></textarea>
    <br>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('posts.index') }}">Volver a la lista</a>
