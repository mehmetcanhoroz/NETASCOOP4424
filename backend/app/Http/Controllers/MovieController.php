<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieImage;
use App\Models\MovieTrailer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        return response(Movie::with(['images'])->orderByDesc('id')->get()->all(), 200);
    }

    public function show(Request $request)
    {
        $movie = Movie::with(['comments', 'trailers', 'likeDislikes', 'images'])->findOrFail($request->id);

        return response($movie, 200);
    }

    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->pg = $request->pg;
        $movie->duration = $request->duration;
        $movie->my_score = $request->my_score;
        $movie->imdb_score = $request->imdb_score;
        $movie->meta_score = $request->meta_score;
        $movie->release_date = Carbon::parse($request->release_date);

        $movie->save();

        foreach ($request->images as $img) {
            $image = new MovieImage;
            $image->movie_id = $movie->id;
            $image->image = $img;
            $image->save();
        }

        foreach ($request->trailers as $trailer) {
            $trailer = new MovieTrailer();
            $trailer->movie_id = $movie->id;
            $trailer->src = $trailer;
            $trailer->save();
        }


        return view('movieadd', ['message' => 'Movie Added!']);
    }
}
