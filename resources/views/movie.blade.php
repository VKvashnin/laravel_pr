@extends('layouts.app')

@section('title', "Movie")

@section('content')
    <div class="container">
        <div class="row my-2">
            <div class="col-12 col-sm-4 text-center text-sm-right">
                <div style="max-width:250px;max-height:400px;min-width:100px;" class="d-inline-block">
                    <img class="w-100" src="{{ asset('/storage/'.$movie->image) }}" alt="">
                </div>
            </div>
            <div class="col-12 col-sm-8 text-center text-sm-left">
                <h1>
                    <a href="/movie/{{ $movie->id }}">{{ $movie->name }}</a>
                </h1>
                <div class="d-inline-block m-x-auto">
                    <div>
                        <b>Год:</b> <a href="/sort/year/{{$movie->year->id}}">{{ $movie->year->year }}</a>
                    </div>
                    <div>
                        <b>Страна:</b> <a href="/sort/country/{{$movie->country->id}}">{{ $movie->country->name }}</a>
                    </div>
                    <div>
                        <b>Жанры:</b>
                        @foreach($movie->genres as $genre)
                            <a href="/sort/genre/{{$genre->id}}">{{ $genre->name }}</a>
                        @endforeach
                    </div>
                    <div>
                        <b>Описание:</b> {{ $movie->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

