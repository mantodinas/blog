@extends('base')

@section('content')
    <div class="blog-container">
            @foreach ($posts as $post)
            <div class="blog">
                <img class="blog-img" src="img/blog-example-img/blog1.jpg">
                <h2 class="blog-title">{{ $post->title }}</h2>
                <p class="short-description">{{ $post->description }}</p>
                <p class="day-added">{{ $post->created_at->format('Y m d') }}</p>
            </div>
            @endforeach
        </div>
@endsection