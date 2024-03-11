<?php

namespace App\Http\Resources\Film;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'film_name' => $this->film_name,
            'poster_link'=> $this->poster_link,
            'genres'=> $this->genres,
        ];
    }
}
