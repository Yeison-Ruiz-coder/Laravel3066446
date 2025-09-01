<h1>Editar usuario</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('users.index') }}">Volver a la lista</a>
