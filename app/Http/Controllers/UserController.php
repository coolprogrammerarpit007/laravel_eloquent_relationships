<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::first();
        // one to one relationship
        // $profile_url = $user->profile->website_url;

        // $posts = $user->posts; // will gives an array
        // foreach($posts as $post)
        // {
        //     echo $post->title . " " . $post->post_text . " " . "</br>";
        // }



        // one to many relationships

    }
}
