@extends('base')

@section('content')
<div class="blog-page-container">
    <form class="blog-page" action="{{ route('post.destroy', $post->link) }}" method="POST">
        <img class="image" src="{{ url($post->imageLink) }}">
        <h1 class="title">{{ $post->title }}</h1>
        <p class="content">{{ $post->content }}</p>
        <div class="blog-bottom">
            <div class="btn-container">
                <input type="hidden" name="_method" value="delete" />
                <input class="btn" type="submit" value="delete">

                <button>edit</button>
            </div>
            <div class="day-created-container">
                <p class="day-created">{{ $post->created_at->format('Y m d') }}</p>
            </div>
        </div>
    </form>
</div>
@endsection