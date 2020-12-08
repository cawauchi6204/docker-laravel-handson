<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public function scopeGetCommentById($query, $id)
    {
        return $query->where('post_id', $id)->get();
    }
}
