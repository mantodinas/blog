@extends('base')

@section('content')
<div class="create-blog-container">
    <form class="create-blog" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        <h2>create blog</h2>
        <label>image</label>
        <input type="file" name="image" accept="image/*">
        <label>link</label>
        <input type="text" name="link" placeholder="link...">
        <label>title</label>
        <input type="text" name="title" placeholder="title...">
        <label>short description</label>
        <textarea name="description" cols="30" rows="5"></textarea>
        <label>text content</label>
        <textarea name="content" cols="30" rows="5"></textarea>
        <button>submit</button>
    </form>
</div>
@endsection