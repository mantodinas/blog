@extends('base')

@section('content')
<div class="blog-page-container">
    <div class="blog-page">
        <img class="image" src="{{ url($post->imageLink) }}">
        <h1 class="title">{{ $post->title }}</h1>
        <p class="content">{{ $post->content }}</p>

        <div class="blog-bottom">
            @auth
            <form action="{{ route('post.destroy', $post->link) }}" method="POST">
                <div class="btn-container">
                    <input type="hidden" name="_method" value="edit"/>
                    <input class="btn" type="submit" value="edit">

                    <input type="hidden" name="_method" value="delete"/>
                    <input class="btn" type="submit" value="delete">
                </div>
            </form>
            @endauth
            <div class="day-created-container">
                <div class="day-created">{{ $post->created_at->format('Y m d') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection