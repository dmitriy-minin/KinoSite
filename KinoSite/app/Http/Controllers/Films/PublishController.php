<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Requests\Film\PublishRequest;

class PublishController extends Controller
{
    public function __invoke(PublishRequest $request, $id){
        $data = $request->validated();
        $film = Film::find($id);
        if (!array_key_exists("public_status", $data)) {
            $data["public_status"]= 0;
        }
        else{
            $data["public_status"]= 1;
        }
        //dd($data, $film);
        $film->update($data);
        
        return redirect()->route('film_edit', $id);
    }
}
