@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div>
            <p>Email: {{$user->email}}</p>
            <p>Логин: {{$user->login}}</p>
            <p>Id: {{$user->id}}</p>
        </div>
    </div>
@endsection
