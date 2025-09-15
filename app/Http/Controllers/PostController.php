<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("posts.index", [
            'allPosts' => Post::with(['user', 'category'])->simplePaginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'category' => ['required'],
            'image' => ['nullable', File::types(['png', 'jpg', 'webp'])],
            'body' => ['required'],
        ]);

        $imagePath = $request->image->store('posts', 'public');
        $cate = Category::firstOrCreate(['name' => $request->category]);

        Auth::user()->posts()->create([
            'title' => $request->title,
            'category_id' => $cate->id,
            'body' => $request->body,
            'image' => $imagePath,
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
