<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index(){
        return view('layouts.main');
    }

    public function genres(){
        return view('genre.genres');
    }
}
