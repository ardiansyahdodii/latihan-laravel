@extends('layout.main')

@section('content')

    <h1>{{ $title }}</h1>

    @foreach ($posts as $post)
        <article class="mt-5">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <h2>{{ $post->title }}</h2>
            </a>
            <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">
                {{ $post->user->name }}
            </a>
            --
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}
            </a>
            {!! $post->body !!}
        </article>
    @endforeach

@endsection