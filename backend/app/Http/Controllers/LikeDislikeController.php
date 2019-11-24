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
        $movie = Movie::findOrFail($request->movie_id);
        $reaction = LikeDislike::where(
            [
                'ip' => $request->ip(),
                'movie_id' => $request->movie_id
            ])->first();

        $exist = false;
        if (!$reaction) {
            $reaction = new LikeDislike;
            $exist = false;
        } else if ($request->liked == $reaction->liked) {
            return response(['message'=>'You already reacted same as now you clicked!'], 200);
        }

        //$reaction = new LikeDislike();
        //$reaction->ip = '127.0.0.55';
        $reaction->ip = $request->ip();
        $reaction->movie_id = $request->movie_id;
        $reaction->liked = $request->liked;

        $reaction->save();

        return redirect()->action('MovieController@show', ['id' => $request->movie_id]);
    }

}
