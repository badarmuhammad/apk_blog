<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index() 
    {

        $title = " ";
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
        ]);
    }

    public function show(Post $post) 
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }


}
