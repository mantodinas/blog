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

    public function index(Request $request): View
    {
        $search = $request->get('search');
        $posts = empty($search) ? Post::all() : Post::where('title', 'like', '%'.$search.'%')->get();
        
        return view('blog.index', ['posts' => $posts ]);
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

        return redirect()->route('post.index');
    }

    public function edit(Post $post): View
    {
        return view('blog.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $this->setPostModelParams($post, $request);
        $post->update();

        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }

    private function setPostModelParams(Post $post, Request $request): void
    {
        $post->title = $request->title;
        $post->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->image->store('images');
            $post->imageLink = 'storage/' . $image;
        }
        $post->link = $request->link;
        $post->content = $request->content;
    }
}