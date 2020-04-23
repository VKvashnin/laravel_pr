<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            {!! Form::label('login', 'Логин') !!}
            {!! Form::text('login', $user->login ?? null, ['class' => 'form-control']) !!}
        </div>

        @error('login')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('email', 'E-mail') !!}
            {!! Form::text('email', $user->email ?? null, ['class' => 'form-control']) !!}
        </div>

        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('status', 'Статус') !!}
            {!! Form::select('status', $statuses, $user->status->id-1, ['class' => 'form-control']) !!}
        </div>

        @error('status')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('role', 'Роль') !!}
            {!! Form::select('role', $roles, $user->role->id-1, ['class' => 'form-control']) !!}
        </div>

        @error('role')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
