<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Жанр') !!}
            {!! Form::text('name', $genre->name ?? null, ['class' => 'form-control']) !!}
        </div>

        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
</div>
