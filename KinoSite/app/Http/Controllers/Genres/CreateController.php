<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('genre.genreCreate');
    }
}
