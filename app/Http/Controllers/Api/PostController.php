<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() 
    {
        $post = Post::where('published', true)->with(['category', 'tags', 'user'])->get();

        return response()->json($post);
    }
}
