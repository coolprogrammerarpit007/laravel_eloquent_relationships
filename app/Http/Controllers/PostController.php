<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::first();
        $tags = $post->tags;

        // foreach($tags as $tag)
        // {
        //     //
        // }
    }
}
