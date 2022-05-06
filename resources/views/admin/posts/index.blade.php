<h1>posts</h1>

<a href="{{ route('posts.create') }}">Cadastrar novo post</a>
<hr>
@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach
