<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();
        return redirect('/');
    }
}
