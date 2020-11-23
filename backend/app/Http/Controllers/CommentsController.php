<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;

class CommentsController extends Controller
{
  public function store(Request $request)
  {
    $comment = new Comment();

    $comment->content = $request->content;
    $posts_id = $request->posts_id;
    $comment->posts_id = $posts_id;
    $comment->save();
    return redirect('/post/' . $posts_id);
  }
}
