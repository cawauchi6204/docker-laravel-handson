<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = 'comment';

  public function scopeGetCommentById($query,$id)
  {
    return $query->where('posts_id',$id)->get();
  }
}
