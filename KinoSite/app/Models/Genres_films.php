<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres_films extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'films_with_genres';
}
