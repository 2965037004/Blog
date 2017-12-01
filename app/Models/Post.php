<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //  post-categor : many-one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // post-comment : one-many
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // post-tag : many-many
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withtimestemp();
    }
}
