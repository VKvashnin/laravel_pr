@extends('layouts.admin')

@section('title', 'Countries')

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
                @foreach($countries as $country)
                    <tr>
                        <th scope="row">{{ $country->id }}</th>
                        <td>{{ $country->name }}</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('admin.countries.edit', $country->id) }}">Редактировать</a>
                        </td>
                        <td>
                            {!! Form::open(['url' => route('admin.countries.destroy', $country->id), 'method' => 'delete', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                {!! Form::submit('X', ['class' => 'btn btn-primary']); !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif

        <div class="text-center m-2">
            <a class="btn btn-primary btn-lg" href="{{ route('admin.countries.create') }}">Добавить</a>
        </div>

        <div class="d-flex">
            <div class="mx-auto mt-2">
                {{ $countries->links() }}
            </div>
        </div>
    </div>
@endsection

<script>

    function ConfirmDelete()
    {
        let x = confirm("Вы подтверждаете удаление?");
        if (x)
            return true;
        else
            return false;
    }

</script>
