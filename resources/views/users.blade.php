@extends('layouts.app')

@section('title', 'Users')

@section('content')
        <div class="container">
            <div>Users list</div>
            @foreach($users as $user)
                <div>
                    <span>{{ $user['id'] }}</span>
                    <span>{{ $user['name'] }}</span>
                </div>
            @endforeach
        </div>
@endsection
