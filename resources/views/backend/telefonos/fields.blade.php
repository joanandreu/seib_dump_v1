<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Alta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_alta', 'Fecha Alta:') !!}
    {!! Form::date('fecha_alta', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Caducidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_caducidad', 'Fecha Caducidad:') !!}
    {!! Form::date('fecha_caducidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Tipo Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_tipo_tel', 'Fk Tipo Tel:') !!}
    {!! Form::number('fk_tipo_tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_horario', 'Fk Horario:') !!}
    {!! Form::number('fk_horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Persona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_persona', 'Fk Persona:') !!}
    {!! Form::number('fk_persona', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    {!! Form::number('fk_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_cargo', 'Fk Cargo:') !!}
    {!! Form::number('fk_cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Orden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orden', 'Orden:') !!}
    {!! Form::number('orden', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Cargo Org Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_cargo_org', 'Fk Cargo Org:') !!}
    {!! Form::number('fk_cargo_org', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.telefonos.index') !!}" class="btn btn-default">Cancel</a>
</div>
