<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Support;

class FilmsController extends Controller
{
    // public function index(){
    //     $films = Film::orderBy('id', 'desc')->paginate(20);
    //     return view('films.filmsCards', compact('films'));

    //     // $film = Film::find(3);
    //     // dd($film->genres);

    //     // $genre = Genre::find(3);
    //     // dd($genre->films);
    // }
    
    // public function cards(){
    //     $films = Film::where('public_status', 1)->paginate(20);
    //     return view('films.films', compact('films'));
    // }

    // public function create(){
    //     $genres = Genre::all();
    //     return view('films.filmsCreate', compact('genres'));
    // }

    // public function store(){
    //     $data = request()->validate([
    //         'film_name' => 'string',
    //         'poster_link'=>'string',
    //         'genres'=>'required'
    //     ]);
        
    //     $genres = $data['genres'];
    //     unset($data['genres']);
    //     //dd($data, $genres);
    //     // if ($data["genres"] == null) {
    //     //     $data["genres"] = 0;
    //     // }

    //     $film = Film::create($data);
    //     $film->genres()->attach($genres);

    //     return redirect()->route('films_table');
    // }

    // public function show($id){
    //     $film = Film::findOrFail($id);
    //     return view('films.show', compact('film'));
    // }

    // public function edit($id){
    //     $film =Film::find($id);
    //     $genres =Genre::all();
    //     return view('films.filmEdit', compact('film', 'genres'));
    // }

    // public function update($id){
    //     $films = Film::find($id);
    //     $data = request()->validate([
    //         'film_name' => 'required|string',
    //         'poster_link'=>'string',
    //         'genres'=>''
    //     ]);
    //     $genres = $data['genres'];
    //     unset($data['genres']);

    //     $films->update($data);
    //     $films->genres()->sync($genres);

    //     return redirect()->route('film_show', $id);
    // }

    // public function delete(){
    //     $films = Film::find(10);
    //     $films->delete();
    // }

    // public function destroy($id){
    //     $film = Film::find($id);
    //     $film->delete();
    //     return redirect()->route('films_table');
    // }

    public function published(int $film){
        $films = Film::find($film);
        $films->update([
            'is_published'=> 1
        ]);
    }
}
