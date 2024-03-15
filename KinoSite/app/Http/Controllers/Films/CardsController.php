<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Resources\Film\FilmResource;

class CardsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $films = Film::orderBy('id', 'desc')->where('public_status', 1)->paginate(20);
        return FilmResource::collection($films);
        //return view('films.films', compact('films'));
    }
}
