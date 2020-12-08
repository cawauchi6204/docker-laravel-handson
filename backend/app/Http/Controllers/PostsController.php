<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $data = Post::paginate(10);
        return view('index', compact('data'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.detail', ['id' => $post->id]);
    }

    public function detail($id)
    {
        $post = Post::where('id', $id)->first();
        $comment = Comment::getCommentById($id);
        return view('posts.{id}', [
            'post' => $post,
            'comment' => $comment,
        ]);
    }
}
