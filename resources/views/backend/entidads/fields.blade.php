<!-- Fk Tipo Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_tipo_entidad', 'Fk Tipo Entidad:') !!}
    {!! Form::number('fk_tipo_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Abrv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_abrv', 'Nombre Abrv:') !!}
    {!! Form::text('nombre_abrv', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_horario', 'Fk Horario:') !!}
    {!! Form::number('fk_horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    {!! Form::number('fk_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::text('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Cif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cif', 'Cif:') !!}
    {!! Form::text('cif', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Cnae Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_cnae', 'Fk Cnae:') !!}
    {!! Form::number('fk_cnae', null, ['class' => 'form-control']) !!}
</div>

<!-- Actividad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actividad', 'Actividad:') !!}
    {!! Form::text('actividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Loc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_loc', 'Fk Loc:') !!}
    {!! Form::number('fk_loc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.entidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
