<!-- Fk Persona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_persona', 'Fk Persona:') !!}
    {!! Form::number('fk_persona', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.grupoPersonas.index') !!}" class="btn btn-default">Cancel</a>
</div>
