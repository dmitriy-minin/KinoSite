<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genres_films;
use App\Models\Genre;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $film = Film::findOrFail($id);
        $filmsgenres = Genres_films::all()->where('film_id','=', $id);
        $genres = Genre::all();

        //dd($film, $genres);
        return view('films.show', compact('film', 'filmsgenres', 'genres'));
    }
}
