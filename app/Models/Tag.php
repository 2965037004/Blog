<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function belongsToManyArticle()
    {
        return $this->belongsToMany('Article','article_tag','tag_id','article_id');
    }
}
