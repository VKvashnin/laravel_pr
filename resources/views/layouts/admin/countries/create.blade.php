@extends('layouts.admin')

@section('title', 'Create country')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('admin.countries.store')]) !!}
            @include('layouts.admin.countries.blocks.form.fields')
            <div class="form-group">
                {!! Form::submit('Добавить', ['class' => 'btn btn-primary']); !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
