<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    public function index(){
        return 'films page';
    }

    public function create(){
        return view('film.create');
    }

    public function store(){
        $data = request()->validate([
            'film_name' => 'string',
            'poster_link'=>'string'
        ]);
        Film::create($data);
        return redirect()->route('films.index');
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
        $films = Film::find(6);
        $films->delete();
    }

    public function published(int $film){
        $films = Film::find($film);
        $films->update([
            'is_published'=> 1
        ]);
    }
}
