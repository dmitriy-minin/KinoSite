<?php

namespace App\Http\Controllers\Genres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = request()->validate([
            'genre' => 'required',
        ]);
        
        $film = Genre::create($data);

        return redirect()->route('genres_table');
    }
}
