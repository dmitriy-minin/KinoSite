<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $genre = Genre::find($id);
        $data = request()->validate([
            'genre' => 'required|string',
        ]);
        $genre->update($data);

        return redirect()->route('genres_table', $id);
    }
}
