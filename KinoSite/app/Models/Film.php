<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;

class Film extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $guarded = [];
    protected $table = 'films';

    public function genres(){
        return $this->belongsToMany(Genre::class, 'films_with_genres','film_id', 'genre_id');
    }
}
