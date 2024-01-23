@extends('layout.main')

@section('content')

    <h1 class="text-center">{{ $title }}</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form action="/blog">
                <div class="input-group mb-3">
                    <input type="text" class="form-control border-2 border-black" placeholder="Search Posts" name="search" value="{{ request('search') }}">
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

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