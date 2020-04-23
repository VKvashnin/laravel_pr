@extends('layouts.admin')

@section('title', 'Edit year')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('admin.years.update', $year), 'method' => 'patch']) !!}
            @include('layouts.admin.years.blocks.form.fields')
            <div class="form-group">
                {!! Form::submit('Изменить', ['class' => 'btn btn-primary']); !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
