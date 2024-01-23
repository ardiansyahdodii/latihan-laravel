@extends('layout.main')

@section('content')

    <h1 class="text-center">{{ $title }}</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">   
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">   
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control border-2 border-black" placeholder="Search Posts" name="search" value="{{ request('search') }}">
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    @foreach ($posts as $post)
        <article class="mt-5">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <h2>{{ $post->title }}</h2>
            </a>
            <a href="/blog?author={{ $post->user->username }}" class="text-decoration-none">
                {{ $post->user->name }}
            </a>
            --
            <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}
            </a>
            {!! $post->body !!}
            {{-- {{ $post->body }} --}}
        </article>
    @endforeach

    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-end mt-5">
        {{ $posts->links() }}
    </div>

@endsection