<x-layout
    meta-tittle="Crear nuevo post"
    meta-description="Formulario para la creacion de un nuevo post">

    <h1>{{__('Create new post')}}</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            {{__('Title')}} <br/>
            <input name="title" type="text" value="{{ old('title') }}"/>
            @error('title')
            <br/>
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label> <br/>
        <label>
            {{__('Body')}} <br/>
            <textarea name="body">{{ old('body') }}</textarea>
            @error('body')
            <br/>
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label> <br/>
        <button type="submit">{{__('Send')}}</button>
        <br/>
    </form>
    <br/>

    <a href="{{ route('posts.index') }}">{{__('Back')}}</a>

</x-layout>
