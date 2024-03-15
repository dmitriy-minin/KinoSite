<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Http\Resources\Genre\GenreResource;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $genres = Genre::all();
        //return GenreResource::collection($genres);
        return view('genre.genres', compact('genres'));
    }
}
