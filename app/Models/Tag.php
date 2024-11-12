<?php

namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Many to Many Relationships

    // A tag can belongs to Many Posts so this belongs To Many To Many Relationships
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
