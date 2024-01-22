@extends('layout.main')

@section('content')
    <h1>Blog Page</h1>
    <article class="mt-4">
        <h2>{{ $post['title'] }}</h2>
        <h4>{{ $post['author'] }}</h4>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">
        <button>Back to Blog</button>
    </a>

@endsection