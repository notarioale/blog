<x-layout :meta-tittle="$post->title" :meta-description="$post->body">

    <h1>{{ $post->title }}</h1>
    <p>{{$post->body}}</p>
    <a href="{{ route('posts.index') }}">Atrás</a>

</x-layout>
