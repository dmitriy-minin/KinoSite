<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class PublicController extends Controller
{
    public function __invoke($id){
        $film = Film::find($id);
        return view('films.public', compact('film'));
    }
}
