<x-layout :meta-tittle="$post->title" :meta-description="$post->body">

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')

        @include('posts.form-fields')

        <button type="submit">{{__('Send')}}</button>
        <br/>
    </form>
    <br/>

    <a href="{{ route('posts.index') }}">{{__('Back')}}</a>

</x-layout>
