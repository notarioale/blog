<x-layout
    meta-tittle="Crear nuevo post"
    meta-description="Formulario para la creacion de un nuevo post">

    <h1>{{__('Create new post')}}</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        @include('posts.form-fields')

        <button type="submit">{{__('Send')}}</button>
        <br/>
    </form>
    <br/>

    <a href="{{ route('posts.index') }}">{{__('Back')}}</a>

</x-layout>
