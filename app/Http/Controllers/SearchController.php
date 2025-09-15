<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $posts = Post::with('user', 'category')->where('title', 'LIKE', '%' . $request->q . '%')->get();

        return view('posts.resault', [
            'posts' => $posts
        ]);
    }
}
