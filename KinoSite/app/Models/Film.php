<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'films';

    public function genres(){
        return $this->belongsToMany(Genre::class, 'films_with_genres','genre_id','film_id');
    }
}
