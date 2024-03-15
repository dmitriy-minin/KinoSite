<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Requests\Film\FilterRequest;
use App\Http\Filters\FilmFilter;
use App\Http\Resources\Film\FilmResource;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        
        $page = $data['page'] ?? 1;
        $perPage = $data['perPage'] ?? 20;

        $filter = app()->make(FilmFilter::class, ['queryParams'=>array_filter($data)]);
        $films = Film::filter($filter)->orderBy('id', 'desc')->paginate($perPage, ['*'], 'page', $page);

        // dd($films);
        return FilmResource::collection($films);
        // $films = Film::where('public_status', 1)->orderBy('id', 'desc')->paginate(20);
        //return view('films.filmsCards', compact('films'));
    }
}
