<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): array|Collection
    {
        return Post::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request): void
    {
        $post = new Post();
        $this->setPostModelParams($post, $request);
        $post->save();
    }

    public function show(Post $post): Post
    {
        return $post;
    }

    public function edit(Post $post)
    {
        //
    }


    public function update(Request $request, Post $post): void
    {
        $this->setPostModelParams($post, $request);
        $post->update();
    }


    public function destroy(Post $post): void
    {
        $post->delete();
    }

    private function setPostModelParams(Post $post, Request $request): void
    {
        $post->title = $request->title;
        $post->description = $request->description;
        $post->imageLink = $request->imageLink;
        $post->link = $request->link;
        $post->content = $request->htmlContent;
    }
}
