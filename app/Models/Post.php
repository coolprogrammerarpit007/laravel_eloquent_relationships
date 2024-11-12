<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;

class Post extends Model
{


    // A Post belong to a single user.
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    // Many To Many Relationships

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
