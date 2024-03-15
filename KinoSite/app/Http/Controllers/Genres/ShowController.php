<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Genres_films;

class ShowController extends Controller
{
    public function __invoke($id){
        $genre = Genre::find($id);
        $films = Film::all();
        $genresFilms = Genres_films::where('genre_id', '=', $id)->get();

        //dd($genre, $films, $genresFilms);
        return view('genre.showFilms', compact('genre', 'films', 'genresFilms'));
    }
    
}
