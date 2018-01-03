<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;

class StaticPagesController extends Controller
{
    public function home()
	{
        $posts = Post::where('published','1')
                    ->orderBy('created_at','DESC')
                    ->with(['user','category','tags'])
                    ->paginate(10);
        $favoriteCountPosts = Post::where('pulished','1')
                                ->orderBy('favorite_count','ASC');

		return view('static_pages/home',compact('posts','favoriteCountPosts'));
	}

    public function about()
    {
        return view('static_pages/about');
    }
}
