<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $film =Film::find($id);
        $genres =Genre::all();
        return view('films.filmEdit', compact('film', 'genres'));
    }
}
