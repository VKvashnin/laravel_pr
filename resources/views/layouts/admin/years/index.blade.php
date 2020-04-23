@extends('layouts.admin')

@section('title', 'Years')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Год</th>
                </tr>
            </thead>
            <tbody>
                @foreach($years as $year)
                    <tr>
                        <th scope="row">{{ $year->id }}</th>
                        <td>{{ $year->year }}</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('admin.years.edit', $year->id) }}">Редактировать</a>
                        </td>
                        <td>
                            {!! Form::open(['url' => route('admin.years.destroy', $year->id), 'method' => 'delete']) !!}
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
            <a class="btn btn-primary btn-lg" href="{{ route('admin.years.create') }}">Добавить</a>
        </div>

        <div class="d-flex">
            <div class="mx-auto mt-2">
                {{ $years->links() }}
            </div>
        </div>
    </div>
@endsection
