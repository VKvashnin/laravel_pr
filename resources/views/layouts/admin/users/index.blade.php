@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Название</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->login }}</td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id) }}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if (session('alert'))
            <div class="alert alert-success text-center">
                {{ session('alert') }}
            </div>
        @endif

        <div class="d-flex">
            <div class="mx-auto mt-2">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
