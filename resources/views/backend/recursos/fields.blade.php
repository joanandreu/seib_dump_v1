<!-- Cod Recurso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_recurso', 'Cod Recurso:') !!}
    {!! Form::text('cod_recurso', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Tipo Riesgo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_tipo_riesgo', 'Fk Tipo Riesgo:') !!}
    {!! Form::number('fk_tipo_riesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Tipo Recurso Humano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_tipo_recurso_humano', 'Fk Tipo Recurso Humano:') !!}
    {!! Form::number('fk_tipo_recurso_humano', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_material', 'Fk Material:') !!}
    {!! Form::number('fk_material', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Entidad Recurso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_entidad_recurso', 'Fk Entidad Recurso:') !!}
    {!! Form::number('fk_entidad_recurso', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    {!! Form::number('fk_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.recursos.index') !!}" class="btn btn-default">Cancel</a>
</div>
