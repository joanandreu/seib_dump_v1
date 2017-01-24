<!-- Fk Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_plan', 'Fk Plan:') !!}
    {!! Form::number('fk_plan', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.planAvisos.index') !!}" class="btn btn-default">Cancel</a>
</div>
