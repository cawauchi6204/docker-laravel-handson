<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;

class PostsController extends Controller
{
  public function index()
  {
    $data = Post::paginate(10);
    return view('index',compact('data'));
  }

  public function store(Request $request)
  {
    $post = new Post;

    $post->title = $request->title;
    $post->content = $request->content;

    $post->save();
    return redirect('/');
  }

  public function detail(Request $request)
  {
    $id = $request->path();
    // 数字以外除去
    $id = preg_replace('/[^0-9]/','',$id);
    $posts_data = Post::findPost($id);

    $comment_data = Comment::getComment($id);

    return view('posts.{id}',[
      'posts_data' => $posts_data[0],
      'comment_data' => $comment_data
      ]);
  }
}
