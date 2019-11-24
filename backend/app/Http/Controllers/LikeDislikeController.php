<?php

namespace App\Http\Controllers;

use App\Models\LikeDislike;
use App\Models\Movie;
use Illuminate\Http\Request;

class LikeDislikeController extends Controller
{
    //
    public function store(Request $request)
    {
        $movie = Movie::findOrFail($request->id);
        $reaction = LikeDislike::where(
            [
                'ip' => $request->ip,
                'movie_id' => $request->movie_id
            ])->get();

        if (!$reaction) {
            $reaction = new Movie();
        }

        $reaction->ip = $request->ip;
        $reaction->movie_id = $request->movie_id;
        $reaction->liked = $request->liked;

        $reaction->save();
    }

}
