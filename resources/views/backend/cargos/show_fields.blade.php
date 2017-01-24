<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $cargo->id !!}</p>
</div>

<!-- Cargo Field -->
<div class="form-group">
    {!! Form::label('cargo', 'Cargo:') !!}
    <p>{!! $cargo->cargo !!}</p>
</div>

<!-- Fk Entidad Field -->
<div class="form-group">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    <p>{!! $cargo->fk_entidad !!}</p>
</div>

<!-- Fk Funcion Cargo Field -->
<div class="form-group">
    {!! Form::label('fk_funcion_cargo', 'Fk Funcion Cargo:') !!}
    <p>{!! $cargo->fk_funcion_cargo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $cargo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $cargo->updated_at !!}</p>
</div>

