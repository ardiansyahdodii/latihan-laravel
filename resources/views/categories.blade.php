@extends('layout.main')

@section('content')

    <h1>Categories Pages</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h3>
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a>
                </h3>
            </li>
        </ul>
    @endforeach

@endsection