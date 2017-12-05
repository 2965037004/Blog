<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

/**
 * App\Models\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @mixin \Eloquent
 */
class Category extends Model
{
    //  category-post : one-many
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
