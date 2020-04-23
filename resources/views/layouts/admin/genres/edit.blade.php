@extends('layouts.admin')

@section('title', 'Edit genre')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('admin.genres.update', $genre), 'method' => 'patch']) !!}
            @include('layouts.admin.genres.blocks.form.fields')
            <div class="form-group">
                {!! Form::submit('Изменить', ['class' => 'btn btn-primary']); !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
