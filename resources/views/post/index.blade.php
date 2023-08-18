<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Blog') }}
        </h2>
    </x-slot>

    @foreach ($posts as $post)
        <h2>{{ $post->title}}</h2>
        <img src="{{ asset('/storage/' . $post->image) }}" alt="">
        <button><a href="{{ route('posts.show', $post) }}">Voir plus</a></button>
    @endforeach


</x-app-layout>

