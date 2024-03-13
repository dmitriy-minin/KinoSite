<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Film\FilterRequest;
use App\Models\Film;
use App\Http\Filters\FilmFilter;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request){
        $data = $request->validated();
        
        $filter = app()->make(FilmFilter::class, ['queryParams'=>array_filter($data)]);
        $films = Film::filter($filter)->orderBy('id', 'desc')->paginate(20);

        return view('admin.film.index', compact('films'));
    }
}
