<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;

/**
 * App\Models\Post
 *
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @mixin \Eloquent
 * @property int $id
 * @property int $category_id 外键
 * @property string $title 标题
 * @property string $slug 锚点
 * @property string $summary 概要
 * @property string $content 内容
 * @property string $origin 文章来源
 * @property int $comment_count 评论次数
 * @property int $view_count 浏览次数
 * @property int $favorite_count 点赞次数
 * @property int $published 文章是否发布
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCommentCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereFavoriteCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereViewCount($value)
 */
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
        return $this->belongsToMany(Tag::class);
    }
}
