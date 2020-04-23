@extends('layouts.admin')

@section('title', 'Edit country')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('admin.countries.update', $country), 'method' => 'patch']) !!}
            @include('layouts.admin.countries.blocks.form.fields')
            <div class="form-group">
                {!! Form::submit('Изменить', ['class' => 'btn btn-primary']); !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
