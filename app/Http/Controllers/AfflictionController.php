<?php

namespace App\Http\Controllers;
use App\Models\Affliction;

use Illuminate\Http\Request;

class AfflictionController extends Controller
{
    public function index()
    {
        $posts = Affliction::first();
        $posts = $posts->posts;
    }
}
