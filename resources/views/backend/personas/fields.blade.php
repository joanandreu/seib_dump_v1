<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Ape1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape1', 'Ape1:') !!}
    {!! Form::text('ape1', null, ['class' => 'form-control']) !!}
</div>

<!-- Ape2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape2', 'Ape2:') !!}
    {!! Form::text('ape2', null, ['class' => 'form-control']) !!}
</div>

<!-- Indicativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indicativo', 'Indicativo:') !!}
    {!! Form::text('indicativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::text('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_cargo', 'Fk Cargo:') !!}
    {!! Form::number('fk_cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    {!! Form::number('fk_entidad', null, ['class' => 'form-control']) !!}
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

<!-- Fk Tipo Envio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_tipo_envio', 'Fk Tipo Envio:') !!}
    {!! Form::number('fk_tipo_envio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.personas.index') !!}" class="btn btn-default">Cancel</a>
</div>
