<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);

        return response()->json($categories);
    }

    public function store(StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    public function show(Category $category)
    {
        
    }

    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());

        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json("ok");
    }

    public function all() {
        $categories = Category::get();

        return response()->json($categories);
    }

    public function posts(Category $category) {
        // QueryBuilder
        // $posts = Post::join('categories', "categories.id", "=", "posts.category_id")
        //     ->select("posts.*", "categories.title as category")
        //     ->where("categories.id", $category->id)
        //     ->get();
        //     ->toSql();

        // Eloquent
        $posts = Post::with("category")
            ->where("category_id", $category->id)
            ->get();
        
        return response()->json($posts);
    }

    public function slug($slug) {
        $category = Category::where("slug", $slug)->first();  

        return response()->json($category);
    }
}
