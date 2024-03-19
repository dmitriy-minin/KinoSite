<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genres_films;
use App\Models\Genre;
use App\Http\Resources\Film\ShowResourse;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $filmsgenres = Genres_films::where('film_id','=', $id)
        ->join('genres', 'genre_id', '=', 'genres.id')
        ->join('films', 'film_id', '=', 'films.id')
        ->get();

        return ShowResourse::collection($filmsgenres);

        //json_decode($filmsgenres);
        //return view('films.show', compact('filmsgenres'));

        //первый вариант
        // $film = Film::findOrFail($id);
        // $filmsgenres = Genres_films::all()->where('film_id','=', $id);
        // $genres = Genre::all();

        // return new ShowResourse($film);

        //return view('films.show', compact('film', 'filmsgenres', 'genres'));
    }
}
