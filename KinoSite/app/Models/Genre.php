<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'genres';

    public function films(){
        return $this->belongsToMany(Film::class, 'films_with_genres','film_id','genre_id');
    }
}
