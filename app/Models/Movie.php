<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'year_id', 'country_id', 'description', 'image', 'user_id', 'updated_user_id',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie');
    }
}
