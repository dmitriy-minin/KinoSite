<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class FilmFilter extends AbstractFilter
{
    public const FILM_NAME = 'film_name';
    public const GENRES = 'genres';

    protected function getCallbacks(): array
    {
        return [
            self::FILM_NAME => [$this, 'film_name'],
        ];
    }

    public function film_name(Builder $builder, $value){
        $builder->where('film_name', 'like', "%{$value}%");
    }

}