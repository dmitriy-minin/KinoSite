<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $film = Film::find($id);
        $film->delete();
        return redirect()->route('films_table');
    }
}
