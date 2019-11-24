<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $movie = Movie::findOrFail($request->movie_id);
        $comment = new Comment();

        $comment->full_name = $request->full_name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->movie_id = $request->movie_id;

        $comment->save();

        return redirect()->action('MovieController@show')->with(['id' => $request->movie_id]);

        /*$movie = Movie::with(['comments', 'trailers', 'likeDislikes', 'images'])->findOrFail($request->movie_id);

        return response($movie, 200);*/

    }
}
