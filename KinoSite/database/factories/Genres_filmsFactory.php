<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genres_films;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Genres_filmsFactory extends Factory
{
    protected $model = Genres_films::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'genre_id'=>random_int(1,10),
            'film_id'=>random_int(1,120),
        ];
    }
}
