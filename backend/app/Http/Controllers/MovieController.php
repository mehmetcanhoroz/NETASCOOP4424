<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        return response(Movie::with(['images'])->get()->all(), 200);
    }

    public function show(Request $request)
    {
        $movie = Movie::with(['comments', 'trailers', 'likeDislikes', 'images'])->findOrFail($request->id);

        return response($movie, 200);
    }
}
