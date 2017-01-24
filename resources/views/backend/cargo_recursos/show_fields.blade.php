<!-- Fk Cargo Field -->
<div class="form-group">
    {!! Form::label('fk_cargo', 'Fk Cargo:') !!}
    <p>{!! $cargoRecurso->fk_cargo !!}</p>
</div>

<!-- Fk Entidad Field -->
<div class="form-group">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    <p>{!! $cargoRecurso->fk_entidad !!}</p>
</div>

<!-- Fk Recurso Field -->
<div class="form-group">
    {!! Form::label('fk_recurso', 'Fk Recurso:') !!}
    <p>{!! $cargoRecurso->fk_recurso !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $cargoRecurso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $cargoRecurso->updated_at !!}</p>
</div>

