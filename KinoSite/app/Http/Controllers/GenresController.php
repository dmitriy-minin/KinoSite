<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenresController extends Controller
{
    public function index(){
        return view('layouts.main');
    }

    public function genres(){
        $genres = Genre::all();
        return view('genre.genres', compact('genres'));
    }
}
