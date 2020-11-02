<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
  public function store(Request $request)
  {
    $now = new Carbon('now');
    $param = [
      'title' => $request->title,
      'content' => $request->content,
      'created_at' => $now,
      'updated_at' => $now,
    ];
    DB::table('posts')->insert($param);
    return redirect('/');
  }
}
