<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    public function index(){
        return $film = Film::find(1);
        dd($film->genre);
    }
}
