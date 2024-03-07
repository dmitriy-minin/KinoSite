<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Requests\Film\UpdateRequest;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, $id)
    {
        $films = Film::find($id);
        $data = $request->validated();
        $genres = $data['genres'];
        unset($data['genres']);

        $films->update($data);
        $films->genres()->sync($genres);     //метод который не добовляет новые атрибуты а заменяет их при обновлении

        return redirect()->route('film_show', $id);
    }
}
