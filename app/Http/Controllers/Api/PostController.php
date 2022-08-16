<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return response()->json($posts);
    }

    public function store(StoreRequest $request)
    {
        return response()->json(Post::create($request->validated()));
    }

    public function show(Post $post)
    {
        
    }

    public function update(PutRequest $request, Post $post)
    {
        $post->update($request->validated());

        return response()->json($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json("ok");
    }

    public function all() {
        $posts = Post::get();

        return response()->json($posts);
    }

    public function slug(Post $post) {
        //$post = Post::with("category")->where("slug", $slug)->firstOrFail();
        $post->category;

        return response()->json($post);
    }
}
