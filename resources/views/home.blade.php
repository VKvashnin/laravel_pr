@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        @foreach($movies as $movie)
            <div class="row my-2">
                <div class="col-12 col-sm-4 text-center text-sm-right">
                    <div style="max-width:250px;max-height:400px;min-width:100px;" class="d-inline-block">
                        <img class="w-100" src="{{ asset('/storage/'.$movie->image) }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-8 text-center text-sm-left">
                    <h1>
                        <a href="/movie/{{$movie->id}}">{{ $movie->name }}</a>
                    </h1>
                    <div class="d-inline-block m-x-auto">
                        <div>
                            <b>Год:</b> <a href="{{ route('sort.year', $movie->year->id ?? 0) }}">{{ $movie->year->year ?? 'Год не указан' }}</a>
                        </div>
                        <div>
                            <b>Страна:</b> <a href="{{ route('sort.country', $movie->country->id ?? 0) }}">{{ $movie->country->name ?? 'Страна не указана' }}</a>
                        </div>
                        <div>
                            <b>Жанры:</b>
                            @foreach($movie->genres as $genre)
                                <a href="{{ route('sort.genre', $genre->id) }}">{{ $genre->name }}</a>
                            @endforeach
                        </div>
                        <div>
                            <b>Описание:</b> {{ $movie->description }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex">
            <div class="mx-auto mt-2">
                {{ $movies->links() }}
            </div>
        </div>
    </div>
@endsection

