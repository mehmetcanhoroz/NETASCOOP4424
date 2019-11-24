<?php

namespace App\Models;

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
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderByDesc('created_at');
    }
    public function likeDislikes()
    {
        return $this->hasMany(LikeDislike::class);
    }
}
