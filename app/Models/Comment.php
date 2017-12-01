<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //  comment-post : many-one
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
