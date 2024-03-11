<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Requests\Film\StoreRequest;
use App\Http\Resources\Film\FilmResource;

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

        if ($data['poster_link']==null) {
            $data['poster_link']="https://w.forfun.com/fetch/71/71686f02a5f437e3fd963e06f8ccd414.jpeg";
        }

        $film = Film::create($data);
        $film->genres()->attach($genres);

        $arr=[
            'film_name' => $film->film_name,
            'poster_link'=> $film->poster_link,
            'genres'=>$genres,
        ];

        //return $arr;
        return redirect()->route('films_table');
    }
}
