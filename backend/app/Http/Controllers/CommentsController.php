<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect()->route('post.detail', ['id' => $comment->post_id]);
    }
}
