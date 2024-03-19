<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Requests\Film\UpdateRequest;
use App\Services\Film\Service;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, $id)
    {
        $films = Film::find($id);
        $data = $request->validated();

        (new Service())->update($data, $films);        
        // $genres = $data['genres'];
        // unset($data['genres']);

        // $films->update($data);
        // $films->genres()->sync($genres);     

        return redirect()->route('film_show', $id);
    }
}
