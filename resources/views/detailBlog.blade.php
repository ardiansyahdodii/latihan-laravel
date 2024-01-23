@extends('layout.main')

@section('content')
    <h1>{{ $title }}</h1>
    <article class="mt-4">
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!}
    </article>

    <a href="/blog">
        <button>Back to Blog</button>
    </a>

@endsection