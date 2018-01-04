<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Category;

class StaticPagesController extends Controller
{
    public function home()
	{
        $posts = Post::where('published',1)
                    ->orderBy('created_at','DESC')
                    ->with(['user','category','tags'])
                    ->paginate(5);

        $favoriteCountPosts = Post::where('published',1)
                                ->orderBy('favorite_count','DESC')
                                ->limit(5)
                                ->get();

        $tags = Tag::orderBy('hot','DESC')
                    ->limit(5)
                    ->get();

        $categories = Category::orderBy('hot','DESC')
                        ->limit(5)
                        ->get();

        //return var_dump($favoriteCountPosts);

		return view('static_pages/home',compact('posts','favoriteCountPosts','tags','categories'));
	}

    public function about()
    {
        return view('static_pages/about');
    }
}
