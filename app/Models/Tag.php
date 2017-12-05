<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Tag extends Model
{
    public function belongsToManyPost()
    {
        return $this->belongsToMany(Post::class)->withtimestemp();
    }
}
