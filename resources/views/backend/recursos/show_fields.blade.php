<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $recurso->id !!}</p>
</div>

<!-- Cod Recurso Field -->
<div class="form-group">
    {!! Form::label('cod_recurso', 'Cod Recurso:') !!}
    <p>{!! $recurso->cod_recurso !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $recurso->descripcion !!}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{!! $recurso->cantidad !!}</p>
</div>

<!-- Fk Tipo Riesgo Field -->
<div class="form-group">
    {!! Form::label('fk_tipo_riesgo', 'Fk Tipo Riesgo:') !!}
    <p>{!! $recurso->fk_tipo_riesgo !!}</p>
</div>

<!-- Fk Tipo Recurso Humano Field -->
<div class="form-group">
    {!! Form::label('fk_tipo_recurso_humano', 'Fk Tipo Recurso Humano:') !!}
    <p>{!! $recurso->fk_tipo_recurso_humano !!}</p>
</div>

<!-- Fk Material Field -->
<div class="form-group">
    {!! Form::label('fk_material', 'Fk Material:') !!}
    <p>{!! $recurso->fk_material !!}</p>
</div>

<!-- Fk Entidad Recurso Field -->
<div class="form-group">
    {!! Form::label('fk_entidad_recurso', 'Fk Entidad Recurso:') !!}
    <p>{!! $recurso->fk_entidad_recurso !!}</p>
</div>

<!-- Fk Entidad Field -->
<div class="form-group">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    <p>{!! $recurso->fk_entidad !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $recurso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $recurso->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $recurso->deleted_at !!}</p>
</div>

