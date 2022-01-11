@extends('base')

@section('content')
    <div class="blog-container">
            @foreach ($posts as $post)
                <div class="blog">
                    <img class="blog-img" src="{{ $post->imageLink }}">
                    <h2 class="blog-title">{{ $post->title }}</h2>
                    <p class="short-description">{{ $post->description }}</p>
                    <p class="day-added">{{ $post->created_at->format('Y m d') }}</p>
                    <a href="{{ route('post.show', $post->link) }}">Read more</a>
                </div>
            @endforeach
        </div>
@endsection