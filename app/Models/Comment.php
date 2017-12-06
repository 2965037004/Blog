<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

/**
 * App\Models\Comment
 *
 * @property-read \App\Models\Post $post
 * @mixin \Eloquent
 * @property int $id
 * @property int $post_id 外键
 * @property int $parent_id 父评论id
 * @property string $parent_name 父评论标题
 * @property string $username 评论者用户名
 * @property string $email 评论者邮箱
 * @property string $blog 评论者博客地址
 * @property string $content 评论内容
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereBlog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereParentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUsername($value)
 */
class Comment extends Model
{
    //  comment-post : many-one
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
