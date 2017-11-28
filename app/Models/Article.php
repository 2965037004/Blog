<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function belongsToManyTag()
    {
        return $this->belongsToMany('Tag','article_tag','article_id','tag_id');
    }
}
