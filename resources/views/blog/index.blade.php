@extends('base')

@section('content')
    <div class="blog-container">
        @foreach ($posts as $post)
            <a class="link-wrap" href="{{ route('post.show', $post->link) }}">
                <div class="blog">
                    <div class="blog-img-container">
                        <img class="blog-img" src="{{ $post->imageLink }}">
                    </div>
                    <div class="blog-text-container">
                        <h2 class="blog-title">{{ $post->title }}</h2>
                        <p class="short-description">{{ $post->description }}</p>
                        <p class="day-added">{{ $post->created_at->format('Y m d') }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection