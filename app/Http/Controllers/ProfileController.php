<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $profile = Profile::first();
        $user = $profile->user;
        $user_name = $profile->name;
        $user_email = $profile->email;
    }
}
