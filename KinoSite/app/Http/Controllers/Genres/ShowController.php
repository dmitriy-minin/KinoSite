<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Genres_films;
use App\Http\Resources\Genre\ShowResource;

class ShowController extends Controller
{
    public function __invoke($id){
        $genre = Genre::find($id);
        $genresFilms = Genres_films::where('genre_id', '=', $id)
        ->join('films', 'film_id', '=', 'films.id')
        ->get();

        return ShowResource::collection($genresFilms);

        //return view('genre.showFilms', compact('genre', 'genresFilms'));
    }
    
}
