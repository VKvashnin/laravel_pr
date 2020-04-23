@extends('layouts.admin')

@section('title', 'Edit user')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('admin.users.update', $user), 'method' => 'patch']) !!}
        @include('layouts.admin.users.blocks.form.fields')
        <div class="form-group">
            {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']); !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
