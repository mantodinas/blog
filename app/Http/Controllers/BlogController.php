<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): View
    {
        return view('blog.index', ['posts' => Post::all()]);
    }

    public function show(Post $post): View
    {
        return view('blog.show', ['post' => $post]);
    }

    public function create(): View
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $this->setPostModelParams($post, $request);
        $post->save();

        return redirect()->route('post.create');
    }

    private function setPostModelParams(Post $post, Request $request): void
    {
        $post->title = $request->title;
        $post->description = $request->description;
        $image = $request->image->store('images');
        $post->imageLink = 'storage/' . $image;
        $post->link = $request->link;
        $post->content = $request->content;
    }
}