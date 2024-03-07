<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $films = Film::orderBy('id', 'desc')->paginate(20);
        return view('films.filmsCards', compact('films'));
    }
}
