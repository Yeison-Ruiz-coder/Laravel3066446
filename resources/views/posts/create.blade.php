<h1>Crear nuevo post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="body">Contenido:</label>
    <textarea name="body" id="body" required></textarea>
    <br>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('posts.index') }}">Volver a la lista</a>
