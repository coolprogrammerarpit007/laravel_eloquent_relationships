<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Affliction extends Model
{
    // hasManyThrough Relationships, this looks for the distinct relationships

    // look for all the posts that are associated to a certain affiliction from the users table.

    public function posts()
    {
        return $this->hasManyThrough(Post::class,User::class);
    }
}
