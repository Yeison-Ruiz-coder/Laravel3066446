<h1>Detalle del Post</h1>
<p><strong>ID:</strong> {{ $post->id }}</p>
<p><strong>Título:</strong> {{ $post->title }}</p>
<p><strong>Contenido:</strong> {{ $post->content }}</p>
<a href="{{ route('posts.index') }}">Volver a la lista</a>
