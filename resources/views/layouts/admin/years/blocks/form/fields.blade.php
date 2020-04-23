<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            {!! Form::label('year', 'Год') !!}
            {!! Form::text('year', $year->year ?? null, ['class' => 'form-control']) !!}
        </div>

        @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
</div>
