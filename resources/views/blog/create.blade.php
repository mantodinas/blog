@extends('base')

@section('content')
<div class="create-blog">
    <form class="create-container" action="" method="POST" enctype="multipart/form-data">
        <div class="create">
            <div class="add-img">
                img <input type="file" name="image" accept="image/*">
            </div>
    
            <div class="link">
               link <input type="text" name="link" placeholder="link...">
            </div>

            <div class="add-title">

                title <input type="text" name="title" placeholder="title...">
            </div>
    
            <div class="add-content">
                text <textarea name="content" cols="30" rows="5"></textarea>
            </div>

            <div class="add-description">
                description <textarea name="description" cols="30" rows="5"></textarea>
            </div>
            <button>submit</button>
        </div>
    </form>
</div>
@endsection