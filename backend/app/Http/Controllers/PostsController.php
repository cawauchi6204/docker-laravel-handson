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
    $id = $post->id;
    return redirect()->route('post.detail',['id' => $id]);
  }

  public function detail(Request $request,$id)
  {
    $post = new Post();
    $posts = Post::findPostById($id);

    $comment = Comment::getComment($id);

    return view('posts.{id}',[
      'posts_data' => $posts[0],
      'comment_data' => $comment
      ]);
  }
}
