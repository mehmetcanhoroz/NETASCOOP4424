<?php

namespace App\Models;

use App\Model\MovieTrailer;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function images()
    {
        return $this->hasMany(MovieImage::class);
    }
    public function trailers()
    {
        return $this->hasMany(MovieTrailer::class);
    }
}
