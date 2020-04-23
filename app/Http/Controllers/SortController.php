<?php

namespace App\Http\Controllers;

use App\Models\GenreMovie;
use App\Models\Movie;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function year($year)
    {
        $movies = Movie::where('year_id', '=', $year)->paginate(10);

        return view('home', compact('movies'));
    }

    public function country($country)
    {
        $movies = Movie::where('country_id', '=', $country)->paginate(10);

        return view('home', compact('movies'));
    }

    public function genre($genre)
    {
        $movies = Movie::select('movies.id', 'name', 'year_id', 'country_id', 'description', 'image', 'user_id')
            ->join('genre_movie', 'movies.id', '=', 'genre_movie.movie_id')
            ->where('genre_movie.genre_id', $genre)
            ->paginate(10);

        return view('home', compact('movies'));
    }
}
