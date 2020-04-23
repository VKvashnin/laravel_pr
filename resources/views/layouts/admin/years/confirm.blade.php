@extends('layouts.admin')

@section('title', 'Create year')

@section('content')
    <div class="container">
        С этим годом связано $count фильмов, вы уверенны что хотите удалить его?
        {!! Form::open(['url' => route('admin.years.confirmed'), 'method' => 'delete']) !!}
        <div class="form-group">
            {!! Form::submit('Да', ['class' => 'btn btn-primary']); !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
