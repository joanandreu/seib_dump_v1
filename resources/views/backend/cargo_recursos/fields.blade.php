<!-- Fk Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_entidad', 'Fk Entidad:') !!}
    {!! Form::number('fk_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Recurso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_recurso', 'Fk Recurso:') !!}
    {!! Form::number('fk_recurso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.cargoRecursos.index') !!}" class="btn btn-default">Cancel</a>
</div>
