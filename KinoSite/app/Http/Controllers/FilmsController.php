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
        $films = Film::where('public_status', 1)->paginate(20);
        return view('films.films', compact('films'));
    }

    public function create(){
        return view('films.filmsCreate');
    }

    public function store(){
        $data = request()->validate([
            'film_name' => 'string',
            'poster_link'=>'string|url'
        ]);
        Film::create($data);
        return redirect()->route('films_table');
    }

    public function show($id){
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    public function edit($id){
        $film =Film::find($id);
        return view('films.filmEdit', compact('film'));
    }

    public function update($id){
        $films = Film::find($id);
        $data = request()->validate([
            'film_name' => 'string',
            'poster_link'=>'string'
        ]);
        $films->update($data);
        return redirect()->route('film_show', $id);
    }

    public function delete(){
        $films = Film::find(10);
        $films->delete();
    }

    public function destroy($id){
        $film = Film::find($id);
        $film->delete();
        return redirect()->route('films_table');
    }

    public function published(int $film){
        $films = Film::find($film);
        $films->update([
            'is_published'=> 1
        ]);
    }
}
