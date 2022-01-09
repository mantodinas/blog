@extends('base')

@section('content')
<div class="blog-to-container">
    <div class="blog-to">
        <form action="{{ route('post.destroy', $post->link) }}" method="POST">
            <input type="hidden" name="_method" value="delete" />
            <input type="submit" value="DELETE!!!!!!!">
        </form>
        <img src="">
        <h1 class="title">{{ $post->title }}</h1>
        <p class="description">{{ $post->description }}</p>
        <p class="day-added">{{ $post->created_at->format('Y m d') }}</p>
    </div>
</div>
@endsection