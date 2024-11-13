<?php

namespace App\Models;
use App\Models\Series;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function series()
    {
        return $this->belongspTo(Series::class);
    }
}
