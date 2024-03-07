<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $genres = Genre::find($id);
        return view('genre.genreEdit', compact('genres'));
    }
}
