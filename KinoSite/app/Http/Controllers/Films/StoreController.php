<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = request()->validate([
            'film_name' => 'string',
            'poster_link'=>'string',
            'genres'=>'required'
        ]);
        
        $genres = $data['genres'];
        unset($data['genres']);
        //dd($data, $genres);
        // if ($data["genres"] == null) {
        //     $data["genres"] = 0;
        // }

        $film = Film::create($data);
        $film->genres()->attach($genres);

        return redirect()->route('films_table');
    }
}
