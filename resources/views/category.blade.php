@extends('layout.main')

@section('content')

    <h1>Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mt-5">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <h2>{{ $post->title }}</h2>
            </a>
            <a href="/author/{{ $post->user->username }}" class="text-decoration-none">
                {{ $post->user->name }}
            </a>
            --
            <a href="" class="text-decoration-none">
                {{ $post->category->name }}
            </a>
            {!! $post->body !!}

            <a href="/categories/"><button>View All Category</button></a>
            <a href="/blog/"><button>View All Post</button></a>
        </article>
    @endforeach


@endsection