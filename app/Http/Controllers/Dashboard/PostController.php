<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Models\Category;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(2);

        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();

        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //dd(request('title'));
        //dd($request->all());

        /*$validated = Validator::make($request->all(), [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500",
            "content" => "required|min:10",
            "category_id" => "required",
            "description" => "required|min:10",
            "posted" => "required"
        ]);*/

        //dd($validated->errors());
        //dd($validated->fails());

        // $data = array_merge($request->all(), ['image' => '']);

        // $data['slug'] = Str::slug($data['title']);

        //dd($data);

        Post::create($request->validated());

        return to_route("post.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("dashboard.post.show", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');

        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();

        if(isset($data["image"])) {
            $data["image"] = $fileName = time().".".$data["image"]->extension();
            
            $request->image->move(public_path("image"), $fileName);
        }

        $post->update($data);

        //return redirect()->route("post.index");
        return to_route("post.index")->with('status', "Registro actualizado.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route("post.index");
    }
}
