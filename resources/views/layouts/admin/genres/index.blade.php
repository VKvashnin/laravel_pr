@extends('layouts.admin')

@section('title', 'Genres')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genres as $genre)
                    <tr>
                        <th scope="row">{{ $genre->id }}</th>
                        <td>{{ $genre->name }}</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('admin.genres.edit', $genre->id) }}">Редактировать</a>
                        </td>
                        <td>
                            {!! Form::open(['url' => route('admin.genres.destroy', $genre->id), 'method' => 'delete']) !!}
                                {!! Form::submit('X', ['class' => 'btn btn-primary']); !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif

        <div class="text-center m-2">
            <a class="btn btn-primary btn-lg" href="{{ route('admin.genres.create') }}">Добавить</a>
        </div>

        <div class="d-flex">
            <div class="mx-auto mt-2">
                {{ $genres->links() }}
            </div>
        </div>
    </div>
@endsection
