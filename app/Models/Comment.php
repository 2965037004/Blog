<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

/**
 * App\Models\Comment
 *
 * @property-read \App\Models\Post $post
 * @mixin \Eloquent
 */
class Comment extends Model
{
    //  comment-post : many-one
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
