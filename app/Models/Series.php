<?php

namespace App\Models;
use App\Models\Video;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function video()
    {
        return $this->hasMany(Video::class)->orderBy('p');
    }
}
