@extends('layout.main')

@section('content')

    <h1>Blog Page</h1>

    @foreach ($posts as $post)
        <article class="mt-5">
            <a href="/blog/{{ $post->slug }}">
                <h2>{{ $post->title }}</h2>
            </a>
            {!! $post->body !!}
        </article>
    @endforeach

@endsection