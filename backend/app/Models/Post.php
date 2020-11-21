<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';

  public function scopeFindPost ($query,$id)
  {
    return $query->where('id',$id)->get();
  }
}
