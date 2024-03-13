<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Film\FilterRequest;
use App\Models\Film;
use App\Http\Filters\FilmFilter;

class CardsController extends Controller
{
    public function __invoke(FilterRequest $request){
        $films = Film::orderBy('id', 'desc')->where('public_status', 1)->paginate(20);

        return view('admin.film.cards', compact('films'));
    }
}
