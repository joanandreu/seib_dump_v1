<!-- Fk Loc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_loc', 'Fk Loc:') !!}
    {!! Form::number('fk_loc', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matricula', 'Matricula:') !!}
    {!! Form::text('matricula', null, ['class' => 'form-control']) !!}
</div>

<!-- Transporte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transporte', 'Transporte:') !!}
    {!! Form::text('transporte', null, ['class' => 'form-control']) !!}
</div>

<!-- Grua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grua', 'Grua:') !!}
    {!! Form::text('grua', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Tipo Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_tipo_material', 'Fk Tipo Material:') !!}
    {!! Form::number('fk_tipo_material', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.materials.index') !!}" class="btn btn-default">Cancel</a>
</div>
