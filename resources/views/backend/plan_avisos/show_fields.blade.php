<!-- Fk Plan Field -->
<div class="form-group">
    {!! Form::label('fk_plan', 'Fk Plan:') !!}
    <p>{!! $planAviso->fk_plan !!}</p>
</div>

<!-- Fk Cargo Field -->
<div class="form-group">
    {!! Form::label('fk_cargo', 'Fk Cargo:') !!}
    <p>{!! $planAviso->fk_cargo !!}</p>
</div>

<!-- Fk Entidad Field -->
<div class="form-group">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    <p>{!! $planAviso->fk_entidad !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $planAviso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $planAviso->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $planAviso->deleted_at !!}</p>
</div>

