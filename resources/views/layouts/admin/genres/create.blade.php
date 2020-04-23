@extends('layouts.admin')

@section('title', 'Create genre')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('admin.genres.store')]) !!}
            @include('layouts.admin.genres.blocks.form.fields')
            <div class="form-group">
                {!! Form::submit('Добавить', ['class' => 'btn btn-primary']); !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
