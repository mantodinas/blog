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
        <textarea name="description" cols="30" rows="5" maxlength="200">
        </textarea>
        <label class="text-content-label" >text content</label>
            <div class="text-editor">
                <button class="text-size" id="textSize"><i class="fas fa-text-height"></i></button>
                <button class="text-bold" id="textBold"><i class="fas fa-bold"></i></button>
                <button class="text-underline" id="textUnderline"><i class="fas fa-underline"></i></button>
                <button class="next-paragraph" id="nextParagraph"><i class="fas fa-paragraph"></i></button>
                <button class="text-left" id="textLeft"><i class="fas fa-align-left"></i></button>
                <button class="text-center" id="textCenter"><i class="fas fa-align-center"></i></button>
                <button class="text-right" id="textRight"><i class="fas fa-align-right"></i></button>
                <button class="text-color" id="textColor"><i class="fas fa-tint"></i></button>
            </div>
        <textarea name="content" cols="30" rows="5"></textarea>
        <button>submit</button>
    </form>
</div>
@endsection