<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Response;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' =>  Post::latest()->filter(request(['search', 'category','auther']))->paginate(10)->withQueryString(),
            'categories' => Category::all(),
        ]);
    }


    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }


   

}
