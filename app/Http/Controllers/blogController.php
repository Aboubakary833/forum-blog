<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class blogController extends Controller
{
    public function index(){
        $posts = Post::join('users', 'users.id', '=', 'posts.author_id')->paginate(4);
        $category = Category::all();
        // dd($posts);
        return view('blog.index', ['category' => $category, 'post' => $posts]);
    }

    public function singleBlog($slug){
        $posts = Post::where('posts.slug', $slug)->join('users', 'users.id', '=', 'posts.author_id')->first();
        // dd($posts);
        return view('blog.single', ['post' => $posts]);
    }
}
