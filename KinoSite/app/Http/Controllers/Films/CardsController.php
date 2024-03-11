<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class CardsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $films = Film::orderBy('id', 'desc')->where('public_status', 1)->paginate(20);
        return view('films.films', compact('films'));
    }
}
