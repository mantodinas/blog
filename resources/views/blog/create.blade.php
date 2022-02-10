@extends('base')

@section('content')
<div class="create-blog-container">
    <form class="create-blog" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        <h2>create blog</h2>
        <label>image</label>
        <input class="select-img" type="file" name="image" accept="image/*" required>
        <label>link</label>
        <input type="text" name="link" maxlength="75" placeholder="link..." required>
        <label>title</label>
        <input type="text" name="title" maxlength="75" placeholder="title..." required>
        <label>short description</label>
        <textarea name="description" cols="30" rows="5" maxlength="200">
        </textarea>
        <label class="text-content-label">text content</label>
        <textarea id="textEditor" name="content" cols="30" rows="5"></textarea>
        <button>submit</button>
    </form>
</div>
@endsection