@extends('layouts.admin')

@section('title', 'Create year')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('admin.years.store')]) !!}
            @include('layouts.admin.years.blocks.form.fields')
            <div class="form-group">
                {!! Form::submit('Добавить', ['class' => 'btn btn-primary']); !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
