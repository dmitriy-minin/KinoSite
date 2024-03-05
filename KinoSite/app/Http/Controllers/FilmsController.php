<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    public function index(){
        $films = Film::paginate(20);
        return view('films.filmsCards', compact('films'));
    }

    public function cards(){
        $films = Film::paginate(20);
        return view('films.films', compact('films'));
    }

    public function create(){
        return view('films.filmsCreate');
    }

    public function store(){
        $data = request()->validate([
            'film_name' => 'string',
            'poster_link'=>'string'
        ]);
        Film::create($data);
        return redirect()->route('films_table');
    }

    public function show($id){
        $film = Film::findOrFail($id);
        dd($film);
    }

    public function update(){
        $films = Film::find(3);
        $films->update([
            'film_name'=>'avengers',
            'poster_link'=>'link_to_poster'
        ]);
    }

    public function delete(){
        $films = Film::find(10);
        $films->delete();
    }

    public function published(int $film){
        $films = Film::find($film);
        $films->update([
            'is_published'=> 1
        ]);
    }
}
