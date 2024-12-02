<x-layout meta-tittle="Blog tittle" meta-description="Blog description">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
    @endforeach
</x-layout>
