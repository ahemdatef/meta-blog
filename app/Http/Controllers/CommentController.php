<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function index(Post $post)
    {

        $comments = $post->comments()->paginate(10);
        return view('comments.index', [
            'comments' => $comments,
        ]);
    }

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'comment_body' => ['required'],
        ]);

        Auth::user()->comments()->create([
            'post_id' => $post->id,
            'comment_body' => $request->comment_body
        ]);

        return redirect('/posts/' . $post->id);

    }
}
