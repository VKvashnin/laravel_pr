<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'genre_movie';

    protected $fillable = [
        'movie_id', 'genre_id',
    ];
}
