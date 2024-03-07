<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Requests\Film\StoreRequest;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        $genres = $data['genres'];
        unset($data['genres']);

        $film = Film::create($data);
        $film->genres()->attach($genres);

        return redirect()->route('films_table');
    }
}
