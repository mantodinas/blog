@extends('base')

@section('content')
<div class="create-blog-container">
    <form class="create-blog" action="{{ route('post.update', $post->link) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
        <h2>edit blog</h2>
        <label>image</label>
        <input class="select-img" type="file" name="image" accept="image/*" >
        <label>link</label>
        <input type="text" name="link" placeholder="link..." maxlength="75" value="{{ $post->link }}" required>
        <label>title</label>
        <input type="text" name="title" placeholder="title..." maxlength="75" value="{{ $post->title }}" required>
        <label>short description</label>
        <textarea name="description" cols="30" rows="5" maxlength="200">{{ $post->description }}</textarea>
        <label>text content</label>
        <textarea id="textEditor" name="content" cols="30" rows="5">{!! $post->content !!}</textarea>
        <button>submit</button>
    </form>
</div>
@endsection